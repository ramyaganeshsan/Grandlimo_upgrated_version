<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2026-05-18 00:06:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 00:06:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 00:16:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 00:16:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 00:37:00 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2026-05-18 00:37:00 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2026-05-18 00:42:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 00:42:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 00:42:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 00:42:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 00:46:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 00:46:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 00:56:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 00:56:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 00:56:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 00:56:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 00:56:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 00:56:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 00:56:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 00:56:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 00:56:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 00:56:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 00:56:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 00:56:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 00:56:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 00:56:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 00:56:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 00:56:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 00:56:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 00:56:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 00:56:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 00:56:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 00:56:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 00:56:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 00:56:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 00:56:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 00:56:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 00:56:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 00:56:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 00:56:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 00:56:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 00:56:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 00:56:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 00:56:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 00:56:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 00:56:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 00:56:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 00:56:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 00:56:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 00:56:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 00:56:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 00:56:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 00:56:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 00:56:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 00:56:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 00:56:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 00:56:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 00:56:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 00:56:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 00:56:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 00:56:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 00:56:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 00:56:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 00:56:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 00:56:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 00:56:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 00:56:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 00:56:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 00:56:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 00:56:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 00:56:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 00:56:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 00:56:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 00:56:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 00:56:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 00:56:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 01:07:09 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-05-18 01:07:09 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-05-18 01:14:18 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-05-18 01:14:18 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-05-18 02:07:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 02:07:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 02:29:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 02:29:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 02:34:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 02:34:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 02:38:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 02:38:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 02:51:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 02:51:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 02:51:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 02:51:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 02:51:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 02:51:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 02:52:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 02:52:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 02:52:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 02:52:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 02:52:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 02:52:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 02:52:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 02:52:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 02:52:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 02:52:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 02:52:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 02:52:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 02:52:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 02:52:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 02:52:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 02:52:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 02:52:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 02:52:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 02:52:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 02:52:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 02:52:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 02:52:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 02:52:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 02:52:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 02:52:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 02:52:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 02:52:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-05-18 02:52:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 02:52:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 02:52:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 02:52:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 02:52:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 02:52:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 02:52:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 02:52:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 02:52:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 02:52:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 02:52:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 02:52:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: well-known/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 02:52:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: well-known/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 02:52:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infophp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 02:52:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infophp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 02:52:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infos.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 02:52:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infos.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 02:52:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ~admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 02:52:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ~admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 02:52:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ++++ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 02:52:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ++++ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 02:52:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL www/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 02:52:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL www/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 02:52:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL m/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 02:52:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL m/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 02:52:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 02:52:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 02:52:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL forum/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 02:52:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL forum/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 02:52:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 02:52:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 02:52:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL my/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 02:52:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL my/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 02:52:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL portal/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 02:52:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL portal/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 02:52:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-05-18 02:52:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 02:52:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL app/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 02:52:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL app/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 02:52:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 02:52:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 02:52:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL demo/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 02:52:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL demo/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 02:52:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dev/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 02:52:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dev/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 02:52:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL staging/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 02:52:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL staging/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 02:52:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL secure/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 02:52:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL secure/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 02:52:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL id/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 02:52:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL id/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 02:52:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-05-18 02:52:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 02:52:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webmail/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 02:52:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webmail/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 02:52:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mail/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 02:52:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mail/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 02:52:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL web/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 02:52:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL web/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 02:52:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 02:52:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 02:52:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL accounts/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 02:52:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL accounts/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 02:52:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cpanel/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 02:52:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cpanel/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 02:52:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL auth/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 02:52:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL auth/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 02:52:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sso/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 02:52:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sso/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 03:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 03:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 03:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 03:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 03:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 03:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 03:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 03:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 03:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 03:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 03:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 03:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 03:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serviceAccountKey.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 03:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serviceAccountKey.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 03:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 03:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 03:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 03:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 03:12:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 03:12:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 03:24:31 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-05-18 03:24:31 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-05-18 03:46:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 03:46:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 04:49:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _next/static was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 04:49:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _next/static was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 04:49:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-05-18 04:49:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 05:18:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: druid/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 05:18:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: druid/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 06:10:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 3uu02u1osg13.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 06:10:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 3uu02u1osg13.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 06:10:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 3uu02u1osg13.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 06:10:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 3uu02u1osg13.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 06:10:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/gravitysmtp/v1/tests/mock-data was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 06:10:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/gravitysmtp/v1/tests/mock-data was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 06:10:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/gravitysmtp/v1/tests/mock-data was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 06:10:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/gravitysmtp/v1/tests/mock-data was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 06:10:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/gravitysmtp/v1/tests/mock-data was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 06:10:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/gravitysmtp/v1/tests/mock-data was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 06:10:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/gravitysmtp/v1/tests/mock-data was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 06:10:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/gravitysmtp/v1/tests/mock-data was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 06:10:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 06:10:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 06:10:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 06:10:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 06:10:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 06:10:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 06:10:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 06:10:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 06:10:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 06:10:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 06:10:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 06:10:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 06:10:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 06:10:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 06:10:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 06:10:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 06:10:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 06:10:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 06:10:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 06:10:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 06:10:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 06:10:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 06:10:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 06:10:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 06:10:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 06:10:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 06:10:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 06:10:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 06:22:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 06:22:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 06:31:27 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-05-18 06:31:27 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-05-18 06:32:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aaa9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 06:32:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aaa9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 06:32:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aab9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 06:32:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aab9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 06:44:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 06:44:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 06:58:25 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-05-18 06:58:25 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-05-18 07:01:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/wlwmanifest.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 07:01:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/wlwmanifest.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 07:01:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 07:01:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 07:48:46 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-05-18 07:48:46 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-05-18 07:49:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aaa9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 07:49:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aaa9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 07:49:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aab9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 07:49:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aab9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 08:01:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 08:01:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 08:18:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 08:18:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 08:33:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL goform/AdvSetMacMtuWan was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 08:33:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL goform/AdvSetMacMtuWan was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 08:33:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ssdpcgi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 08:33:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ssdpcgi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 08:33:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL goform/setMacFilterCfg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 08:33:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL goform/setMacFilterCfg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 08:51:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 08:51:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 09:01:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 09:01:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 09:10:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ReportServer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 09:10:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ReportServer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 09:17:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/transparentpix.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 09:17:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/transparentpix.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 09:46:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 09:46:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 09:46:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dvtexuhui87av was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 09:46:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dvtexuhui87av was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 09:47:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 09:47:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 09:47:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ehsb21vkdwn8pj4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 09:47:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ehsb21vkdwn8pj4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 09:51:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 09:51:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 09:51:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wjcijx6_0lx was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 09:51:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wjcijx6_0lx was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 10:01:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 10:01:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 10:04:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 10:04:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 10:14:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 10:14:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 10:19:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 10:19:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 10:20:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 10:20:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 10:30:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hudson was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 10:30:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hudson was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 10:55:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 10:55:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 11:05:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/luci was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 11:05:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/luci was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 11:13:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 11:13:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 11:13:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 11:13:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 11:13:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _24s49g6dkemq1b was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 11:13:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _24s49g6dkemq1b was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 11:16:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 11:16:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 11:17:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 11:17:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 11:43:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 11:43:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 13:41:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Dr0v was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 13:41:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Dr0v was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 14:21:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 14:21:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 14:21:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 14:21:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 15:01:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 15:01:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 15:01:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 15:01:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 15:18:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 15:18:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 15:34:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL GponForm/diag_Form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 15:34:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL GponForm/diag_Form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 15:39:01 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-05-18 15:39:01 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-05-18 15:51:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL fcet3si85_ggmc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 15:51:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL fcet3si85_ggmc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 16:19:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 16:19:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 16:48:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 16:48:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 16:50:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 16:50:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 17:21:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 17:21:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 17:21:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 17:21:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 17:21:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 17:21:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 17:21:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 17:21:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 17:21:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 17:21:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 17:21:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 17:21:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 17:21:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 17:21:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 17:21:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 17:21:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 17:21:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 17:21:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 17:21:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 17:21:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 17:21:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 17:21:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 17:21:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 17:21:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 17:21:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 17:21:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 17:21:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 17:21:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 17:21:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 17:21:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 17:21:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 17:21:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 17:21:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 17:21:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 17:21:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 17:21:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 17:21:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 17:21:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 17:21:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php-cgi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 17:21:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php-cgi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 17:21:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 17:21:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php-cgi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php-cgi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php-cgi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php-cgi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php-cgi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php-cgi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php-cgi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php-cgi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 17:21:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php-cgi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 17:21:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php-cgi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 17:21:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php-cgi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 17:21:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php-cgi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 17:21:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php-cgi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 17:21:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php-cgi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 17:21:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 17:21:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 17:21:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php-cgi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 17:21:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php-cgi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 17:21:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php-cgi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 17:21:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php-cgi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 17:21:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 17:21:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 17:21:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 17:21:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 17:21:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 17:21:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 17:21:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 17:21:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 17:21:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 17:21:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 17:21:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 17:21:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 17:21:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 17:21:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 17:21:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 17:21:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 17:21:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 17:21:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 17:21:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 17:21:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 17:21:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 17:21:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 17:21:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 17:21:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 17:21:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 17:21:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 17:21:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 17:21:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 17:21:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 17:21:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 17:21:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 17:21:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 17:21:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 17:21:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 17:21:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 17:21:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 17:21:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 17:21:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 17:21:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 17:21:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 17:21:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 17:21:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 17:21:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 17:21:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 17:21:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 17:21:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 17:21:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 17:21:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 17:21:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 17:21:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 17:21:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 17:21:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 17:21:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 17:21:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 17:21:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 17:21:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 17:21:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 17:21:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 17:21:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _next was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 17:21:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _next was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 17:21:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _next/static was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 17:21:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _next/static was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 17:21:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 17:21:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 17:21:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _next was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 17:21:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _next was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 17:21:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _next/static was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 17:21:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _next/static was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 17:21:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-05-18 17:21:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 17:21:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 17:21:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 17:21:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-05-18 17:21:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 17:30:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 17:30:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 17:31:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 17:31:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 17:45:17 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-05-18 17:45:17 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-05-18 18:25:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mcp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 18:25:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mcp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 18:25:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sse was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 18:25:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sse was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 18:25:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 18:25:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 18:42:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/luci was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 18:42:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/luci was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 18:45:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 18:45:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 18:48:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 18:48:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 18:48:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL k7fr3h1mtobx was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 18:48:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL k7fr3h1mtobx was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 19:16:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 19:16:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 19:44:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 19:44:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 19:46:28 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-05-18 19:46:28 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-05-18 19:49:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 19:49:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 19:49:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 19:49:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 19:49:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 19:49:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 19:49:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 19:49:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 19:49:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 19:49:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 19:49:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 19:49:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 19:49:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 19:49:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 19:49:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 19:49:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 19:49:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 19:49:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 19:49:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 19:49:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 19:49:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 19:49:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 19:49:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 19:49:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 19:49:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 19:49:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 19:49:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 19:49:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 19:49:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 19:49:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 19:49:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 19:49:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 19:49:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-05-18 19:49:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 19:49:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 19:49:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 19:49:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 19:49:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 19:49:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 19:49:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 19:49:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 19:49:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 19:49:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.crt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 19:49:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.crt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 19:49:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.gcp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 19:49:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.gcp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 19:49:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env/wp-admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 19:49:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env/wp-admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 19:49:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 19:49:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 19:49:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/xray/.env.segments ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 19:49:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/xray/.env.segments ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 19:49:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 19:49:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 19:49:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: applepay/token_map.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 19:49:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: applepay/token_map.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 19:49:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 19:49:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 19:49:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions/.env.default ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 19:49:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions/.env.default ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 19:49:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.new ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 19:49:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.new ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 19:49:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-gateway/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 19:49:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-gateway/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 19:49:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 19:49:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 19:49:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 19:49:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 20:11:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xhr/front/trade/priority/rushPurchase/hot/branch/one ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 20:11:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xhr/front/trade/priority/rushPurchase/hot/branch/one ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 20:24:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/wlwmanifest.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 20:24:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/wlwmanifest.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 20:24:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 20:24:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 20:46:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 20:46:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 20:50:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/luci was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 20:50:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/luci was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 20:50:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/luci was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 20:50:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/luci was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 20:50:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/luci was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 20:50:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/luci was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 20:50:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/luci was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 20:50:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/luci was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 20:50:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/luci was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 20:50:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/luci was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 20:50:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/luci was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 20:50:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/luci was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 20:50:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/luci was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 20:50:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/luci was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 20:50:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/luci was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 20:50:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/luci was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 20:50:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/luci was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 20:50:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/luci was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 21:14:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:14:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:14:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:14:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:14:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:14:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:17:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:17:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/logs/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/logs/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/github.com/gobuffalo/envy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/github.com/gobuffalo/envy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel.log.orig.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel.log.orig.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boxes/oracle-vagrant-boxes/OLCNE/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boxes/oracle-vagrant-boxes/OLCNE/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: drupal/sites/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: drupal/sites/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legacy/tests/9.1.1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legacy/tests/9.1.1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: HUNIV_migration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: HUNIV_migration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset_img/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset_img/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/db.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/db.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: theme/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: theme/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/keys/settings.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/keys/settings.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ios_app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ios_app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL remix-cloudflare-pages-demo-5co/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 21:33:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL remix-cloudflare-pages-demo-5co/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 21:33:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/rails.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/rails.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: basic-network/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: basic-network/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/old/wp-config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/old/wp-config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/private/aws_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/private/aws_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/data/config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/data/config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: next.config.mjs.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: next.config.mjs.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/crm/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/crm/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer.xml.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer.xml.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/php/users.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/php/users.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conta/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conta/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.sample ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.sample ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test/users.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test/users.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/sendgrid.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/sendgrid.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php.orig.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php.orig.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lemonldap-ng-doc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lemonldap-ng-doc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/02-complex-example/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/02-complex-example/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-dotenv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-dotenv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/readme.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/readme.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/postmark.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/postmark.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/github.com/subosito/gotenv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/github.com/subosito/gotenv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: collab-connect-web-application/server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: collab-connect-web-application/server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyRentals.Web/ClientApp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyRentals.Web/ClientApp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/admin/v3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/admin/v3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/site.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/site.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/dev/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/dev/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: $(pwd)/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: $(pwd)/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/old/config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/old/config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/backup/secret.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/backup/secret.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/keys/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/keys/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups/database.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups/database.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/public/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/public/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_credentials.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_credentials.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/backup/secret.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/backup/secret.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/keys/db.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/keys/db.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/log/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/log/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/new/log.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/new/log.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/json/config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/json/config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ClientApp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ClientApp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/backup/readme.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/backup/readme.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repository/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repository/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www-data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www-data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v12.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v12.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test/index.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test/index.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: clientes/laravel_inbox/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: clientes/laravel_inbox/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets/log.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets/log.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: acme-challenge/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: acme-challenge/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Archipel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Archipel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serve-browserbench/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serve-browserbench/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: custom_config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: custom_config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/php/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/php/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/app/public/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/app/public/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: projeto/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: projeto/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/upload/login.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/upload/login.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/db/wp-config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/db/wp-config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp.xml.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp.xml.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.ssh/authorized_keys ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.ssh/authorized_keys ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sql/secret.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sql/secret.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/upload/sample.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/upload/sample.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: function/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: function/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/test/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/test/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/php/config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/php/config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: :443/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: :443/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: style/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: style/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.vscode/sftp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.vscode/sftp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/did-method-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/did-method-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xx-final/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xx-final/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/fullbackup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/fullbackup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/aws_credentials.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/aws_credentials.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2024.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2024.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back-end/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back-end/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: srv6_controller/controller/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: srv6_controller/controller/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/config.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/config.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/backup/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/backup/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/wp-config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/wp-config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config/site.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config/site.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/private/secret.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/private/secret.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: outputs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: outputs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/backup/settings.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/backup/settings.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: agenda/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: agenda/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/env/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/env/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: customer/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: customer/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/bootstrap/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/bootstrap/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL private/aws_credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 21:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL private/aws_credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 21:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/index.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/index.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/data/users.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/data/users.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: films/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: films/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/db/info.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/db/info.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config/log.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config/log.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/db/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/db/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spring_boot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spring_boot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/backups/database.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/backups/database.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/backup/index.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/backup/index.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/default.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/default.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/test/config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/test/config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tmp/site.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tmp/site.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/site.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/site.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer.properties.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer.properties.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/symfony.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/symfony.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/sparkpost_keys.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/sparkpost_keys.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/api/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/api/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.example ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.example ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feature/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feature/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/json/log.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/json/log.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes/channels/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes/channels/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-node/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-node/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/.aws/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/.aws/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/keys/config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/keys/config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: unreal_project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: unreal_project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/assets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/assets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/momentum-fe/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/momentum-fe/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/dashboard/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/dashboard/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: linux/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: linux/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test/test.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test/test.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/default.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/default.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/wp-content/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/wp-content/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rust-backend/dao/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rust-backend/dao/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: club/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: club/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue-end/vue-til/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue-end/vue-til/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/php/login.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/php/login.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/sbin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/sbin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/static/default.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/static/default.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/new/config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/new/config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: srv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: srv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugin_static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugin_static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kolab-syncroton/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kolab-syncroton/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/keys/site.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/keys/site.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/secret.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/secret.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/configprops was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 21:33:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/configprops was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 21:33:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/postgres/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/postgres/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: urlmem-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: urlmem-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: community/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: community/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: http/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: http/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/character-service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/character-service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp.json.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp.json.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local_config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local_config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/keys/env.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/keys/env.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vite.config.mjs.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vite.config.mjs.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/keys/log.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/keys/log.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/backup/readme.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/backup/readme.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: khanlinks/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: khanlinks/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dir/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dir/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/11-transactions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/11-transactions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erp/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erp/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: msks/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: msks/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test/secret.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test/secret.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yaml.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yaml.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/backup/login.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/backup/login.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django_app/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django_app/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/aws_credentials.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/aws_credentials.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/phpmyadmin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/phpmyadmin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: profile/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: profile/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: st-js-be-2020-movies-two/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: st-js-be-2020-movies-two/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/app.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/app.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/old/debug.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/old/debug.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lms/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lms/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/fixtures/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/fixtures/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets/env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets/env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tmp/debug.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tmp/debug.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app1-static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app1-static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/info.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/info.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/sample.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/sample.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/index.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/index.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/keys/sample.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/keys/sample.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/tmp/wp-config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/tmp/wp-config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/backups/dbdump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/backups/dbdump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tmp/env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tmp/env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/Integration/Environment/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/Integration/Environment/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rasax/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rasax/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.json.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.json.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tmp/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tmp/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/old/config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/old/config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/debug.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/debug.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp.yml.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp.yml.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/Secrets/aws_credentials.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/Secrets/aws_credentials.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/secret.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/secret.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.vscode/sftp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.vscode/sftp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-cookie-auth-fauna/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-cookie-auth-fauna/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/data/test.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/data/test.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php.copy.bak.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php.copy.bak.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config/settings.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config/settings.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database_dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database_dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/sql/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/sql/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/react-scripts/fixtures/kitchensink/template/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/react-scripts/fixtures/kitchensink/template/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/index.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/index.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: downloads/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: downloads/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue_CRM/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue_CRM/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: BACK/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: BACK/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django_app/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django_app/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/backend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/backend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cache/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cache/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static-collected/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static-collected/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugins/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugins/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _/.ssh/authorized_keys ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _/.ssh/authorized_keys ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/06-base-service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/06-base-service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.ssh/authorized_keys ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.ssh/authorized_keys ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tailwind.config.mjs.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tailwind.config.mjs.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: run/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: run/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: minified/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: minified/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/assembly/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/assembly/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php~~.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php~~.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ContainerRegistry/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ContainerRegistry/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qv-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qv-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/debug.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/debug.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config/sample.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config/sample.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/upload/log.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/upload/log.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: snowpack.config.js.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: snowpack.config.js.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/database.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/database.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/dev/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/dev/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch6-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch6-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 07-accessing-data/begin/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 07-accessing-data/begin/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/db/login.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/db/login.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: "/wp-config.bak", ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: "/wp-config.bak", ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backup/aws_credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 21:33:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backup/aws_credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 21:33:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/readme.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/readme.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blob/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blob/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rails-api/react-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rails-api/react-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/new/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/new/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/aws_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/aws_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/upload/info.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/upload/info.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-gateway/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-gateway/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/admin.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/admin.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/wp-config.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/wp-config.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: StudioServer/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: StudioServer/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/database.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/database.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: APP/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: APP/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/php/index.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/php/index.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/vhosts/*/www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/vhosts/*/www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/old/main.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/old/main.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel.log.backup.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel.log.backup.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/debug.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/debug.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/private/info.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/private/info.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel.log.copy~~.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel.log.copy~~.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/private/env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/private/env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: newsite/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: newsite/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/test.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/test.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/views/errors/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/views/errors/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/backup/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/backup/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: projeto/.ssh/authorized_keys ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: projeto/.ssh/authorized_keys ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/ubuntu/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/ubuntu/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sessions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sessions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/dbdump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/dbdump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/php/database.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/php/database.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pg_dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pg_dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/__tests__/__fixtures__/typeScriptIntegrationProject/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/__tests__/__fixtures__/typeScriptIntegrationProject/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/.vscode/sftp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/.vscode/sftp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nextjs/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nextjs/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/backup/users.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/backup/users.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/public/secret.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/public/secret.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: FE/huey/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: FE/huey/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/wp-content/plugins/plugin-name/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/wp-content/plugins/plugin-name/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tmp/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tmp/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uc_server/data/config.inc.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uc_server/data/config.inc.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/config/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/config/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: $(pwd)/.env.development ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: $(pwd)/.env.development ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch7-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch7-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask_test_uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask_test_uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bkp/.ssh/authorized_keys ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bkp/.ssh/authorized_keys ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/info.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/info.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: e2e/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: e2e/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/logs/access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/logs/access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/aries-js-worker/fixtures/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/aries-js-worker/fixtures/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/keys/database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/keys/database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/wp-config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/wp-config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/jaeger/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/jaeger/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archive/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archive/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: counterblockd/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: counterblockd/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/wp-config.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/wp-config.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/keys/database.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/keys/database.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-network/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-network/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/mailgun.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/mailgun.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/json/config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/json/config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/db.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/db.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: counterwallet/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: counterwallet/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configurations/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configurations/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stubs/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stubs/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yaml.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yaml.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/login.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/login.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:33:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: @core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:33:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: @core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/rediscommander/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/rediscommander/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: account/.ssh/authorized_keys ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: account/.ssh/authorized_keys ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: orientdb-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: orientdb-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/data/config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/data/config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rabbitmq-cluster/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rabbitmq-cluster/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/wp-config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/wp-config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/db/log.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/db/log.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: members/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: members/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL secrets/aws_credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 21:34:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL secrets/aws_credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 21:34:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.ssh/authorized_keys ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.ssh/authorized_keys ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql.bz2.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql.bz2.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: opt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: opt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/app/private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/app/private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: micro-app-react-communication/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: micro-app-react-communication/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Assignment4/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Assignment4/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: customer/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: customer/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/uploads/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/uploads/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/09-production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/09-production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: errors/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: errors/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/keys/readme.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/keys/readme.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/uploads/wp-content/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/uploads/wp-content/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: profile/.vscode/sftp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: profile/.vscode/sftp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/db/settings.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/db/settings.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fe/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fe/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicons/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicons/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch6a-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch6a-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.vscode/sftp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.vscode/sftp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: opt/project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: opt/project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/backup/readme.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/backup/readme.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db/wp-config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db/wp-config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: InstantCV/server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: InstantCV/server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/login.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/login.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/db/test.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/db/test.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/backup/users.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/backup/users.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/database.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/database.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sql/log.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sql/log.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conta/.vscode/sftp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conta/.vscode/sftp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailgun.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailgun.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/.vscode/sftp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/.vscode/sftp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets/dev/aws_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets/dev/aws_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: target/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: target/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/keys/index.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/keys/index.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config/default.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config/default.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gateway/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gateway/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/static/database.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/static/database.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: unreal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: unreal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/login.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/login.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/mailjet_keys.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/mailjet_keys.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/backup/default.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/backup/default.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/users.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/users.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/json/site.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/json/site.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch8b-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch8b-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/database.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/database.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/keys/config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/keys/config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/backup/env.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/backup/env.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/credentials.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/credentials.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: actuator/jolokia/exec/ch.qos.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: actuator/jolokia/exec/ch.qos.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/backup/db_backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/backup/db_backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/styled-ui-docs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/styled-ui-docs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/cache/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/cache/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twitter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twitter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer.inc.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer.inc.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/current/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/current/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/keys/login.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/keys/login.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel.log.copy.orig.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel.log.copy.orig.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cmd/testdata/expected/dot_env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cmd/testdata/expected/dot_env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:34:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config/db.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:34:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config/db.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 21:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 21:47:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:47:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:47:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:47:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:47:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 5ct05synwy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 21:47:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 5ct05synwy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 21:48:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contracts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contracts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: drupal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: drupal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/config/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/config/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: library/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: library/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: audio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: audio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: protected/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: protected/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: newsite/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: newsite/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/all/libraries/mailchimp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/all/libraries/mailchimp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: [DOMAIN]/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: [DOMAIN]/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Lara/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Lara/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: :80/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: :80/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: :443/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: :443/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: :432/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: :432/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: :8000/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: :8000/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: :8080/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: :8080/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cronlab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cronlab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: agenda/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: agenda/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: clientes/laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: clientes/laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: clientes/laravel_inbox/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: clientes/laravel_inbox/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemaps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemaps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fileweb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fileweb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: club/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: club/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/Database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/Database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cfg/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cfg/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env_files/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env_files/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: envs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: envs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hidden/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hidden/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secure/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secure/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: misc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: misc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configurations/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configurations/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vars/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vars/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vars/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vars/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/envs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/envs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:48:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env_config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:48:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env_config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local_config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local_config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: custom/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: custom/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: custom_config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: custom_config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: custom_env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: custom_env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back-end/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back-end/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: script/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: script/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back-end/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back-end/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cf.js.cool/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cf.js.cool/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: exapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: exapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: saas/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: saas/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.ts/src/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.ts/src/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awstats/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awstats/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: partner/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: partner/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/json/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/json/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: instance/config.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: instance/config.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/Datavase/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/Datavase/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: psnlink/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: psnlink/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __tests__/test-become/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __tests__/test-become/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redmine/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redmine/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blogs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blogs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: HUNIV_migration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: HUNIV_migration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Hash/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Hash/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Helmetjs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Helmetjs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Imagebord/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Imagebord/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: InstantCV/server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: InstantCV/server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Kubernetes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Kubernetes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Library/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Library/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Passportjs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Passportjs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Serve_time_server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Serve_time_server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Server_with_db/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Server_with_db/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Simple_server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Simple_server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Socketio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Socketio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Sources/API/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Sources/API/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: SpotiApps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: SpotiApps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Tests/Application/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Tests/Application/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Travel_form/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Travel_form/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: User_info/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: User_info/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Web/siteMariage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Web/siteMariage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _wpeprivate/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _wpeprivate/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: acme-challenge/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: acme-challenge/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: acme/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: acme/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: acme_challenges/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: acme_challenges/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: actions-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: actions-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: agora/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: agora/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alpha/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alpha/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: anaconda/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: anaconda/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app-order-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app-order-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/code/community/Nosto/Tagging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/code/community/Nosto/Tagging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app1-static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app1-static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app2-static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app2-static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dir/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dir/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_nginx_static_path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_nginx_static_path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset_img/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset_img/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backendfinaltest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backendfinaltest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base_dir/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base_dir/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: basic-network/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: basic-network/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bgoldd/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bgoldd/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bitcoind/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bitcoind/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blankon/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blankon/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blob/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blob/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blue/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blue/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bookchain-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bookchain-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bucoffea/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bucoffea/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cardea/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cardea/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdw-backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdw-backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch2-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch2-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch6-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch6-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch6a-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch6a-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch7-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch7-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch7a-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch7a-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch8-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch8-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch8a-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch8a-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch8b-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch8b-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: challenge/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: challenge/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: challenges/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: challenges/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: charts/liveObjects/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: charts/liveObjects/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chat-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chat-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chiminey/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chiminey/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/mutual-fund-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/mutual-fund-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: clld_dir/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: clld_dir/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: codenames-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: codenames-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: collected_static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: collected_static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: community/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: community/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console/base/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console/base/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console/payments/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console/payments/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/persistence/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/persistence/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: counterblockd/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: counterblockd/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: counterwallet/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: counterwallet/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cryo_project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cryo_project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: d/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: d/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dataset/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dataset/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dataset1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dataset1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dataset2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dataset2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: delivery/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: delivery/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developerslv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developerslv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: directories/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: directories/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django-blog/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django-blog/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django_project_path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django_project_path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: doc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: doc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose/platform/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose/platform/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-elk/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-elk/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-network-healthcheck/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-network-healthcheck/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-node-mongo-redis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-node-mongo-redis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/compose/withMongo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/compose/withMongo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/compose/withPostgres/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/compose/withPostgres/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/db/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/db/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/examples/compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/examples/compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/postgres/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/postgres/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/webdav/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/webdav/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dodoswap-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dodoswap-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dotfiles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dotfiles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: downloads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: downloads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: e2e/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: e2e/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: engine/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: engine/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/dockers/mariadb-test/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/dockers/mariadb-test/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/dockers/php-apache/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/dockers/php-apache/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/example/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/example/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/template/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/template/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: error/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: error/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: errors/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: errors/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: export/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: export/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fastlane/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fastlane/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicons/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicons/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fedex/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fedex/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fhir-api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fhir-api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fileserver/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fileserver/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: films/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: films/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: first-network/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: first-network/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fisdom/fisdom/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fisdom/fisdom/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fixtures/blocks/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fixtures/blocks/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fixtures/fiber-debugger/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fixtures/fiber-debugger/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fixtures/flight/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fixtures/flight/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fixtures/kitchensink/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fixtures/kitchensink/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask_test_uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask_test_uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: font-icons/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: font-icons/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fonts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fonts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front-empathy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front-empathy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front-end/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front-end/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/momentum-fe/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/momentum-fe/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/react/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/react/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/vue/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/vue/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontendfinaltest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontendfinaltest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftpmaster/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftpmaster/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gists/cache/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gists/cache/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gists/laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gists/laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gists/pusher/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gists/pusher/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: github-connect/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: github-connect/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grems-api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grems-api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grems-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grems-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hasura/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hasura/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hgs-static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hgs-static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: higlass-website/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: higlass-website/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: horde/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: horde/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotpot-app-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotpot-app-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: http/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: http/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: httpboot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: httpboot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icon/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icon/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ikiwiki/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ikiwiki/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image_data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image_data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: items/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: items/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js-plugin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js-plugin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jsrelay/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jsrelay/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jupyter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jupyter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: khanlinks/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: khanlinks/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kibana/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kibana/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kodenames-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kodenames-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kolab-syncroton/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kolab-syncroton/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: latest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: latest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: layout/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: layout/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lcomernbootcamp/projbackend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lcomernbootcamp/projbackend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: leafer-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: leafer-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ledger_sync/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ledger_sync/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legacy/tests/9.1.1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legacy/tests/9.1.1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legacy/tests/9.2.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legacy/tests/9.2.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lemonldap-ng-doc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lemonldap-ng-doc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lemonldap-ng-fr-doc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lemonldap-ng-fr-doc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: letsencrypt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: letsencrypt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: linux/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: linux/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailinabox/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailinabox/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailman/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailman/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main_user/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main_user/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manual/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manual/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: master/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: master/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: memcached/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: memcached/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mentorg-lava-docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mentorg-lava-docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: micro-app-react-communication/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: micro-app-react-communication/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: micro-app-react/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: micro-app-react/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mindsweeper/gui/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mindsweeper/gui/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: minified/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: minified/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: monerod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: monerod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongodb/config/dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongodb/config/dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: monitoring/compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: monitoring/compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: moodledata/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: moodledata/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: msks/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: msks/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: munki_repo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: munki_repo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: music/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: music/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: name/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: name/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new-js/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new-js/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: niffler-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: niffler-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: noVNC/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: noVNC/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oldsanta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oldsanta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ops/vagrant/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ops/vagrant/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: option/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: option/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: orientdb-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: orientdb-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: outputs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: outputs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owncloud/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owncloud/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/styled-ui-docs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/styled-ui-docs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packed/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packed/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: page-editor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: page-editor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: parity/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: parity/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patchwork/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patchwork/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pfbe/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pfbe/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pictures/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pictures/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: playground/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: playground/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugin_static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugin_static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: post-deployment/.vscode/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: post-deployment/.vscode/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postfixadmin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postfixadmin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: price_hawk_client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: price_hawk_client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prisma/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prisma/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: processor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: processor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: projbackend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: projbackend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project_root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project_root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pt2/countries/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pt2/countries/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pt8/library-backend-gql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pt8/library-backend-gql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pub/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pub/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: question2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: question2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qv-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qv-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rabbitmq-cluster/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rabbitmq-cluster/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rails-api/react-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rails-api/react-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rasax/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rasax/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: react_todo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: react_todo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repos/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repos/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repository/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repository/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/mysql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/mysql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/phpmyadmin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/phpmyadmin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/rabbitmq/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/rabbitmq/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/rediscommander/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/rediscommander/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resourcesync/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resourcesync/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: restapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: restapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: results/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: results/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rosterBack/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rosterBack/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: roundcube/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: roundcube/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: roundcubemail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: roundcubemail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: run/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: run/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rust-backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rust-backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rust-backend/dao/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rust-backend/dao/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s-with-me-front/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s-with-me-front/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/fvt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/fvt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selfish-darling-backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selfish-darling-backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serve-browserbench/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serve-browserbench/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/src/persistence/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/src/persistence/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/adminer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/adminer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/deployment-agent/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/deployment-agent/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/documents/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/documents/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/graylog/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/graylog/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/jaeger/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/jaeger/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:49:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/minio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:49:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/minio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/monitoring/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/monitoring/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/portainer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/portainer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/redis-commander/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/redis-commander/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/registry/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/registry/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/simcore/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/simcore/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/traefik/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/traefik/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sessions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sessions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shibboleth/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shibboleth/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site-library/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site-library/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitestatic/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitestatic/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sources/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sources/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spearmint/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spearmint/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spikes/config-material-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spikes/config-material-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/add-auth/express/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/add-auth/express/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/assembly/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/assembly/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/character-service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/character-service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/client/mobile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/client/mobile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/core/tests/dotenv-files/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/core/tests/dotenv-files/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/gameprovider-service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/gameprovider-service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/front-end/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/front-end/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/renderer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/renderer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: srv6_controller/controller/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: srv6_controller/controller/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: srv6_controller/examples/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: srv6_controller/examples/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: srv6_controller/node-manager/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: srv6_controller/node-manager/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: st-js-be-2020-movies-two/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: st-js-be-2020-movies-two/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stackato-pkg/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stackato-pkg/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static-collected/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static-collected/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static-html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static-html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static-root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static-root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static_prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static_prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static_root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static_root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static_user/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static_user/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staticfiles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staticfiles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stats/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stats/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: style/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: style/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: styles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: styles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stylesheets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stylesheets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: target/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: target/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temanr10/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temanr10/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temanr9/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temanr9/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-network/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-network/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-network/addOrg3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-network/addOrg3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/aries-js-worker/fixtures/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/aries-js-worker/fixtures/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/adapter-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/adapter-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/agent-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/agent-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/couchdb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/couchdb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/demo/openapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/demo/openapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/did-method-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/did-method-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/did-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/did-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/edv-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/edv-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/openapi-demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/openapi-demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/sidetree-mock/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/sidetree-mock/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/universalresolver/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/universalresolver/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/vc-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/vc-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/fixtures/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/fixtures/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/fixtures/app_types/node/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/fixtures/app_types/node/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/fixtures/app_types/rails/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/fixtures/app_types/rails/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/fixtures/node_path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/fixtures/node_path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/integration/env-config/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/integration/env-config/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testfiles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testfiles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/Integration/Environment/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/Integration/Environment/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v10.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v10.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v11.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v11.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v12.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v12.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v13.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v13.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v7.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v7.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v8.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v8.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v9.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v9.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/drupal-test/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/drupal-test/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/todo-react/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/todo-react/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testwork_json/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testwork_json/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: theme/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: theme/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: theme_static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: theme_static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: thumb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: thumb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: thumbs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: thumbs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tiedostot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tiedostot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ts/prime/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ts/prime/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twitter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twitter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ubuntu/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ubuntu/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ui/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ui/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: unixtime/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: unixtime/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: unsplash-downloader/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: unsplash-downloader/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upfiles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upfiles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: urlmem-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: urlmem-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/github.com/gobuffalo/envy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/github.com/gobuffalo/envy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/github.com/subosito/gotenv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/github.com/subosito/gotenv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: videos/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: videos/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vm-docker-compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vm-docker-compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vod_installer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vod_installer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue-end/vue-til/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue-end/vue-til/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue/vuecli/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue/vuecli/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue_CRM/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue_CRM/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web-dist/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web-dist/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webroot_path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webroot_path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: websocket/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: websocket/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webstatic/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webstatic/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webui/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webui/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: well-known/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: well-known/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: whturk/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: whturk/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: windows/tests/9.2.x/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: windows/tests/9.2.x/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: windows/tests/9.3.x/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: windows/tests/9.3.x/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www-data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www-data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xx-final/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xx-final/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zmusic-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zmusic-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example02-golang-package/import-underscore/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example02-golang-package/import-underscore/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example27-how-to-load-env/sample01/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example27-how-to-load-env/sample01/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example27-how-to-load-env/sample02/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example27-how-to-load-env/sample02/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/01-simple-model/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/01-simple-model/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/02-complex-example/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/02-complex-example/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/03-one-to-many-relationship/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/03-one-to-many-relationship/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/04-many-to-many-relationship/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/04-many-to-many-relationship/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/05-migrations/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/05-migrations/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/06-base-service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/06-base-service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/07-feature-flags/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/07-feature-flags/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/08-performance/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/08-performance/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/09-production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/09-production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/10-subscriptions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/10-subscriptions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/11-transactions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/11-transactions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/drupal-separate-services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/drupal-separate-services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/react-dashboard/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/react-dashboard/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/sdl-first/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/sdl-first/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/sdl-first/prisma/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/sdl-first/prisma/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/vue-dashboard/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/vue-dashboard/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-cookie-auth-fauna/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-cookie-auth-fauna/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-dotenv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-dotenv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-firebase-authentication-serverless/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-firebase-authentication-serverless/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-react-relay-network-modern/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-react-relay-network-modern/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-relay-modern/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-relay-modern/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-universal-configuration-build-time/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-universal-configuration-build-time/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 07-accessing-data/begin/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 07-accessing-data/begin/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 07-accessing-data/end/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 07-accessing-data/end/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 08-routing/begin/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 08-routing/begin/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 08-routing/end/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 08-routing/end/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 09-managing-state/begin/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 09-managing-state/begin/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 09-managing-state/end/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 09-managing-state/end/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/plugin-analytics/src/fixtures/analytics-ga-key/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/plugin-analytics/src/fixtures/analytics-ga-key/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/plugin-qiankun/examples/app1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/plugin-qiankun/examples/app1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/plugin-qiankun/examples/app2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/plugin-qiankun/examples/app2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/plugin-qiankun/examples/app3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/plugin-qiankun/examples/app3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/plugin-qiankun/examples/master/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/plugin-qiankun/examples/master/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/react-scripts/fixtures/kitchensink/template/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/react-scripts/fixtures/kitchensink/template/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/as-alias/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/as-alias/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/default/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/default/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/dev-env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/dev-env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/empty-values/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/empty-values/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/filename/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/filename/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/override-value/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/override-value/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/prod-env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/prod-env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boxes/oracle-vagrant-boxes/ContainerRegistry/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boxes/oracle-vagrant-boxes/ContainerRegistry/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boxes/oracle-vagrant-boxes/Kubernetes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boxes/oracle-vagrant-boxes/Kubernetes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boxes/oracle-vagrant-boxes/OLCNE/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boxes/oracle-vagrant-boxes/OLCNE/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cmd/testdata/expected/dot_env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cmd/testdata/expected/dot_env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: collab-connect-web-application/server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: collab-connect-web-application/server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/src/main/resources/org/jobrunr/dashboard/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/src/main/resources/org/jobrunr/dashboard/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: finalVersion/lcomernbootcamp/projbackend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: finalVersion/lcomernbootcamp/projbackend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samples/chatroom/chatroom-spa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samples/chatroom/chatroom-spa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samples/docker/deploymentscripts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samples/docker/deploymentscripts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/__tests__/__fixtures__/instanceWithDependentSteps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/__tests__/__fixtures__/instanceWithDependentSteps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/__tests__/__fixtures__/typeScriptIntegrationProject/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/__tests__/__fixtures__/typeScriptIntegrationProject/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/__tests__/__fixtures__/typeScriptProject/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/__tests__/__fixtures__/typeScriptProject/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/__tests__/__fixtures__/typeScriptVisualizeProject/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/__tests__/__fixtures__/typeScriptVisualizeProject/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/archetype-resources/__rootArtifactId__-acceptance-test/src/test/resources/app-launcher-tile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/archetype-resources/__rootArtifactId__-acceptance-test/src/test/resources/app-launcher-tile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Modix/ClientApp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Modix/ClientApp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyRentals.Web/ClientApp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyRentals.Web/ClientApp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Nodejs-Projects/play-ground/ManageUserRoles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Nodejs-Projects/play-ground/ManageUserRoles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Nodejs-Projects/play-ground/login/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Nodejs-Projects/play-ground/login/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Nuke.App.Ui/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Nuke.App.Ui/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Final_Project/Airflow_Dag/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Final_Project/Airflow_Dag/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Final_Project/StartingFile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Final_Project/StartingFile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Final_Project/kafka_twitter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Final_Project/kafka_twitter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 3-sequelize/final/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 3-sequelize/final/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 31_structure_tests/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 31_structure_tests/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Archipel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Archipel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Assignment3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Assignment3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Assignment4/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Assignment4/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Chai/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Chai/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ClientApp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ClientApp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CodeGolf.Web/ClientApp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CodeGolf.Web/ClientApp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ContainerRegistry/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ContainerRegistry/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Exercise.Frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Exercise.Frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Exercise.Frontend/train/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Exercise.Frontend/train/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: FE/huey/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: FE/huey/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: FIRST_CONFIG/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: FIRST_CONFIG/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: customer/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: customer/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: projeto/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: projeto/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: profile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: profile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: account/web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: account/web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: customer/web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: customer/web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cache/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cache/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 21:50:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bkp/web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 21:50:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bkp/web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 22:25:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 22:25:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 23:03:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 23:03:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 23:03:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 23:03:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 23:03:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 23:03:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 23:03:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 23:03:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 23:03:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 23:03:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 23:03:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 23:03:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 23:03:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 23:03:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 23:03:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 23:03:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 23:03:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 23:03:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 23:03:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 23:03:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 23:03:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 23:03:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 23:03:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 23:03:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 23:03:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 23:03:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 23:03:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 23:03:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 23:03:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 23:03:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 23:03:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 23:03:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 23:03:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-05-18 23:03:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 23:03:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 23:03:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 23:03:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 23:03:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 23:03:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 23:03:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 23:03:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 23:03:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 23:03:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 23:03:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 23:03:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: well-known/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 23:03:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: well-known/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 23:03:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infophp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 23:03:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infophp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 23:03:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infos.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 23:03:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infos.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 23:03:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ~admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-18 23:03:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ~admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-18 23:03:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ++++ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 23:03:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ++++ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 23:03:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL www/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 23:03:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL www/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 23:03:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL m/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 23:03:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL m/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 23:03:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 23:03:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 23:03:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL forum/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 23:03:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL forum/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 23:03:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 23:03:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 23:03:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL my/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 23:03:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL my/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 23:03:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL portal/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 23:03:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL portal/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 23:03:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-05-18 23:03:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 23:03:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL app/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 23:03:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL app/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 23:03:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 23:03:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 23:03:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL demo/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 23:03:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL demo/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 23:03:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dev/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 23:03:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dev/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 23:03:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL staging/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 23:03:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL staging/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 23:03:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL secure/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 23:03:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL secure/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 23:03:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL id/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 23:03:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL id/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 23:03:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-05-18 23:03:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 23:03:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webmail/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 23:03:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webmail/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 23:03:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mail/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 23:03:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mail/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 23:03:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL web/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 23:03:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL web/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 23:03:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 23:03:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 23:03:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL accounts/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 23:03:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL accounts/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 23:03:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cpanel/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 23:03:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cpanel/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 23:03:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL auth/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 23:03:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL auth/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 23:03:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sso/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 23:03:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sso/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-18 23:28:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-18 23:28:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}