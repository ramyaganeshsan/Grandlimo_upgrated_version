<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2026-06-21 00:04:19 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-21 00:04:19 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-21 00:13:42 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-21 00:13:42 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-21 00:14:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aaa9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 00:14:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aaa9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 00:14:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aab9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 00:14:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aab9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 00:21:08 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-21 00:21:08 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-21 00:25:51 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-21 00:25:51 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-21 00:48:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 00:48:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 00:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL raklcka5zjnn7vs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 00:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL raklcka5zjnn7vs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 00:56:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wiki was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 00:56:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wiki was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 01:30:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 01:30:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 01:30:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 01:30:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 01:30:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 01:30:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 01:30:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 01:30:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 01:30:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 01:30:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 01:30:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 01:30:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 01:30:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 01:30:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 01:30:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 01:30:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 01:30:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 01:30:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 01:30:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 01:30:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 01:30:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 01:30:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 01:30:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 01:30:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 01:30:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 01:30:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 01:30:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 01:30:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 01:30:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 01:30:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 01:30:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 01:30:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 01:30:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 01:30:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 01:30:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 01:30:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 01:30:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 01:30:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 01:30:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 01:30:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 01:30:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 01:30:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 01:30:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 01:30:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 01:30:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 01:30:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 01:30:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 01:30:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 01:30:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 01:30:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 01:30:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 01:30:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 01:30:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 01:30:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 01:30:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 01:30:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 01:30:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 01:30:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 01:30:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 01:30:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 01:30:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 01:30:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 01:30:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 01:30:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:00:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:00:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:00:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:00:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:00:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:00:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:00:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:00:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:00:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:00:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:00:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:00:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:00:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:00:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:00:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:00:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:00:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:00:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:00:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:00:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:00:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:00:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:00:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:00:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:00:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:00:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:00:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:00:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:00:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:00:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:00:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:00:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:00:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:00:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:00:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:00:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:00:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:00:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:00:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:00:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:00:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:00:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:00:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:00:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:00:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:00:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:00:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:00:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:00:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:00:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:00:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:00:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:00:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:00:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:00:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:00:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:00:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:00:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:00:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:00:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:07:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:07:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:07:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:07:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:07:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL zce747vpj was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 02:07:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL zce747vpj was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 02:11:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 02:11:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 02:12:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:12:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 02:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 02:51:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:51:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:52:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:52:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:52:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:52:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:52:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:52:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:52:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:52:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:52:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:52:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:52:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:52:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:52:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:52:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:52:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:52:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:52:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:52:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:52:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:52:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:52:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:52:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:52:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:52:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:52:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:52:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:52:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:52:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:52:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:52:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:52:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:52:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:52:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:52:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:52:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:52:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:52:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:52:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:52:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:52:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:52:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:52:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:52:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:52:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:52:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:52:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:52:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:52:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:52:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:52:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:52:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:52:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:52:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:52:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:52:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:52:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:52:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:52:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:52:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:52:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:52:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:52:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 02:52:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 02:52:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 03:11:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 03:11:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 03:34:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 03:34:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 04:05:02 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2026-06-21 04:05:02 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-06-21 04:14:09 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-21 04:14:09 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-21 04:25:59 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-21 04:25:59 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-21 04:33:37 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2026-06-21 04:33:37 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-06-21 04:33:49 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-21 04:33:49 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-21 04:45:43 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2026-06-21 04:45:43 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-06-21 04:54:55 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2026-06-21 04:54:55 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-06-21 05:04:06 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2026-06-21 05:04:06 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-06-21 05:09:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 05:09:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 05:14:32 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2026-06-21 05:14:32 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-06-21 05:22:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL goform/formJsonAjaxReq was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 05:22:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL goform/formJsonAjaxReq was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 05:26:25 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2026-06-21 05:26:25 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-06-21 05:33:43 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2026-06-21 05:33:43 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-06-21 05:44:57 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2026-06-21 05:44:57 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-06-21 05:55:08 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2026-06-21 05:55:08 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-06-21 06:04:49 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2026-06-21 06:04:49 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-06-21 06:13:48 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2026-06-21 06:13:48 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-06-21 06:19:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: restgui/js/services/resturi.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 06:19:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: restgui/js/services/resturi.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 06:36:31 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2026-06-21 06:36:31 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-06-21 06:46:50 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2026-06-21 06:46:50 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-06-21 06:52:53 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2026-06-21 06:52:53 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-06-21 06:53:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 06:53:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 06:53:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 06:53:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 07:03:50 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2026-06-21 07:03:50 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-06-21 07:04:28 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-21 07:04:28 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-21 07:05:09 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-21 07:05:09 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-21 07:06:01 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-21 07:06:01 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-21 07:06:32 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-21 07:06:32 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-21 07:07:07 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-21 07:07:07 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-21 07:15:34 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2026-06-21 07:15:34 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-06-21 07:21:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 07:21:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 07:21:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mcp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 07:21:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mcp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 07:21:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sse was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 07:21:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sse was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 07:24:43 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2026-06-21 07:24:43 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-06-21 07:34:09 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2026-06-21 07:34:09 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-06-21 07:34:47 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-21 07:34:47 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-21 07:45:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 07:45:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 07:45:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 07:45:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 07:45:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 07:45:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 07:45:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 07:45:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 07:45:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 07:45:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 07:45:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 07:45:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 07:45:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 07:45:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 07:45:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 07:45:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 07:45:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 07:45:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 07:45:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 07:45:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 07:45:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 07:45:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 07:45:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 07:45:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 07:45:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 07:45:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 07:45:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 07:45:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 07:45:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 07:45:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 07:45:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 07:45:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 07:45:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 07:45:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 07:45:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 07:45:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 07:45:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 07:45:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 07:45:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 07:45:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 07:45:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 07:45:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 07:45:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 07:45:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 07:45:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 07:45:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 07:46:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 07:46:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 07:46:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 07:46:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 07:46:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 07:46:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 07:46:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 07:46:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 07:46:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 07:46:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 07:46:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 07:46:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 07:46:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 07:46:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 07:46:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 07:46:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 07:46:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 07:46:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 07:47:52 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2026-06-21 07:47:52 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-06-21 07:52:01 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2026-06-21 07:52:01 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-06-21 07:57:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL en was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 07:57:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL en was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 08:04:35 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2026-06-21 08:04:35 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-06-21 08:13:11 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2026-06-21 08:13:11 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-06-21 08:26:25 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2026-06-21 08:26:25 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-06-21 08:34:31 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2026-06-21 08:34:31 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-06-21 08:35:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 08:35:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 08:44:19 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2026-06-21 08:44:19 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-06-21 08:46:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL onvif/device_service was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 08:46:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL onvif/device_service was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 08:46:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 08:46:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 08:46:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mcp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 08:46:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mcp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 08:46:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sse was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 08:46:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sse was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 08:54:08 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2026-06-21 08:54:08 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-06-21 09:03:48 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2026-06-21 09:03:48 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-06-21 09:14:31 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-21 09:14:31 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-21 09:14:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL odinhttpcall1782022471 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 09:14:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 09:14:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL odinhttpcall1782022471 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 09:14:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 09:14:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 09:14:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 09:14:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL evox/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 09:14:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL evox/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 09:14:33 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-21 09:14:33 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-21 09:14:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 09:14:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 09:25:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 09:25:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 09:35:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-json was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 09:35:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-json was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 09:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 09:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 09:35:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 09:35:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 09:35:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 09:35:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 09:35:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 09:35:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 09:35:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 09:35:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 09:35:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_whm/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 09:35:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_whm/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 09:35:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_cpanel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 09:35:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_cpanel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 09:35:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 09:35:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 09:35:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 09:35:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 09:35:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 09:35:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 09:35:38 --- ERROR: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH/classes/controller/api.php [ 50 ]
2026-06-21 09:35:38 --- STRACE: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH/classes/controller/api.php [ 50 ]
--
#0 /var/www/html/application/classes/controller/api.php(50): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 50, Array)
#1 [internal function]: Controller_Api->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Api))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-06-21 09:35:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-21 09:35:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 09:35:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphql/api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 09:35:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphql/api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 09:35:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/gql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-21 09:35:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/gql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 09:35:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 09:35:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 09:35:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 09:35:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 09:35:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 09:35:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 09:35:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 09:35:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 09:35:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 09:35:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 09:35:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: trace.axd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 09:35:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: trace.axd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 09:35:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 09:35:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 09:35:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 09:35:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 09:35:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-json was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 09:35:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-json was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 09:35:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 09:35:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 09:36:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/how_it_works.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 09:36:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/how_it_works.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 09:36:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/pricing.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 09:36:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/pricing.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 09:36:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passengers/how_it_works.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 09:36:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passengers/how_it_works.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 09:36:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passengers/pricing.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 09:36:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passengers/pricing.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 09:43:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 09:43:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 09:49:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 09:49:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 09:49:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 09:49:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 09:50:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 09:50:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 10:05:28 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-21 10:05:28 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-21 10:11:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 10:11:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 10:13:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 10:13:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 10:24:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passengers/how_it_works.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 10:24:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passengers/how_it_works.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 10:24:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passengers/pricing.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 10:24:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passengers/pricing.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 10:24:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/how_it_works.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 10:24:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/how_it_works.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 10:24:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/pricing.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 10:24:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/pricing.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 10:31:59 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-21 10:31:59 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-21 10:34:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 10:34:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 10:41:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 10:41:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 10:41:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 10:41:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 10:41:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 10:41:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 10:44:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 10:44:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 11:11:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 11:11:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 11:26:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 11:26:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 11:47:17 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-21 11:47:17 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-21 11:49:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL goform/formJsonAjaxReq was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 11:49:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL goform/formJsonAjaxReq was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 13:45:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 13:45:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 13:59:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 13:59:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 15:00:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 15:00:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 15:05:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 15:05:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 15:07:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 15:07:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 16:08:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 16:08:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 16:11:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmui/login.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 16:11:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmui/login.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 16:11:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmui/login.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 16:11:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmui/login.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 16:11:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mgmt/tm/auth/user/nat27oh6 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 16:11:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mgmt/tm/auth/user/nat27oh6 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:38:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/sendgrid_api_key.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/sendgrid_api_key.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL administrator/manifests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:38:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL administrator/manifests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:38:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banking/oauth_redirects.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banking/oauth_redirects.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/data/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/data/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nextjs/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nextjs/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samples/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samples/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/upload/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/upload/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL grafana/api/plugins was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:38:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL grafana/api/plugins was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:38:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: runtime/logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: runtime/logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/next.config.mjs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/next.config.mjs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/keys/env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/keys/env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v3/docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-21 17:38:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v3/docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:38:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/db.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/public/db.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/mail/mailgun_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/mail/mailgun_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose/platform/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose/platform/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/authentication was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-21 17:38:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/authentication was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:38:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/wp/v2/templates was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:38:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/wp/v2/templates was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:38:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask_test_uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask_test_uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chat-app/server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chat-app/server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: risk/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: risk/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/env/secret.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/env/secret.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/env/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/env/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/tmp/wp-config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/tmp/wp-config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nuxt.config.ts.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nuxt.config.ts.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: drush/drush.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: drush/drush.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/plugin-name/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/plugin-name/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mypbx/gyneco/admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mypbx/gyneco/admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connectionstrings.Admin.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connectionstrings.Admin.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sql/login.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sql/login.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/public/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/public/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/old/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/old/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid/mailgun_config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid/mailgun_config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: srv6_controller/examples/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: srv6_controller/examples/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/php/info.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/php/info.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties.tmp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties.tmp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: À ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: À ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets/debug.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets/debug.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: theme/js/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: theme/js/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: token_temp.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: token_temp.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/squid/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/squid/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spotify/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spotify/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/public/secret.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/public/secret.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/upload/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/upload/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo-prod was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:38:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo-prod was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:38:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/upload/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/upload/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/json/settings.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/json/settings.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/sendgrid_api_key.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/sendgrid_api_key.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets/test.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets/test.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/credentials.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/credentials.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xdebug_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xdebug_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/providers.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/providers.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp/mailgun_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp/mailgun_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/mailgun_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/mailgun_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.bak1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.bak1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL azure-credentials_master was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:38:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL azure-credentials_master was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:38:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongo/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongo/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.test ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.test ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: acme/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: acme/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/tests/functional/etc/config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/tests/functional/etc/config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: restapi/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: restapi/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/public/config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/public/config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/private/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/private/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redis.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redis.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/upload/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/upload/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vpc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vpc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/private/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/private/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rust-app/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rust-app/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm/values-admin.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm/values-admin.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/secrets/index.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/secrets/index.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/json/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/json/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.pgsql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.pgsql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postgres_dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postgres_dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailgun/mailer.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailgun/mailer.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL core/profiles was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:38:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL core/profiles was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:38:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nuxt-app/server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nuxt-app/server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/03-one-to-many-relationship/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/03-one-to-many-relationship/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL notifications/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:38:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL notifications/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:38:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid/mailgun_config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid/mailgun_config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/json/env.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/json/env.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/register was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-21 17:38:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/register was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:38:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailgun/sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailgun/sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.sample ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.sample ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/debug.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/debug.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ï¿½ï¿½/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ï¿½ï¿½/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twitter.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twitter.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/sendgrid_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/sendgrid_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/default/files/backup_migrate/backups/full/latest/db/db.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/default/files/backup_migrate/backups/full/latest/db/db.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _nodes/ingest_plugins was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:38:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _nodes/ingest_plugins was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:38:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: "/config/application.properties", ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: "/config/application.properties", ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apache2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apache2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: forgot.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: forgot.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/default.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/default.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ota/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ota/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redmine/config/configuration.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redmine/config/configuration.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.ssh/authorized_keys ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.ssh/authorized_keys ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/backup/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/backup/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-updates/refresh.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-updates/refresh.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: register.php.orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: register.php.orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/php/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/php/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erp/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erp/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inventory-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inventory-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connectionstrings.Example.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connectionstrings.Example.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tmp/logs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:38:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tmp/logs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:38:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config/mailgun_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config/mailgun_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/upload/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/upload/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old-cuburn/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old-cuburn/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/views/errors/500.blade.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/views/errors/500.blade.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 09-managing-state/begin/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 09-managing-state/begin/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/server/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/server/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blue/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blue/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL administrator/sql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:38:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL administrator/sql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:38:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payment.php.copy ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payment.php.copy ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/readme.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/readme.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-key_copy.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-key_copy.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/sql/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/sql/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/cache/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/cache/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/data/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/data/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testapi8.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testapi8.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugins/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugins/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL oauth/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL oauth/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fonts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fonts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/private/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/private/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webpack.config.cjs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webpack.config.cjs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/admin.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/admin.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpsysinfo/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpsysinfo/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.properties.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.properties.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sendgrid_keys was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sendgrid_keys was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/aws_credentials.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/aws_credentials.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postgres/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postgres/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: FRONTEND/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: FRONTEND/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config/index.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config/index.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/netdisk/download was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-21 17:38:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/netdisk/download was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:38:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-key.shared ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-key.shared ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _nodes/fs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:38:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _nodes/fs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:38:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fastapi-app/server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fastapi-app/server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ï¿½ï¿½backendï¿½ï¿½.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ï¿½ï¿½backendï¿½ï¿½.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/data.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/data.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/site.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/site.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/plugin-qiankun/examples/master/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/plugin-qiankun/examples/master/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console/payments/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console/payments/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s-with-me-front/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s-with-me-front/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: verification/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: verification/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-key_s3.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-key_s3.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db/info.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db/info.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/keys/login.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/keys/login.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_backup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_backup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.inc.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.inc.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manage/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manage/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: streaming/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: streaming/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailinabox/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailinabox/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/env/wp-config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/env/wp-config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/upload/config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/upload/config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL drush was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:38:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL drush was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:38:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yml.tmp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yml.tmp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/static/config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/static/config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/network/admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/network/admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/database.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/database.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger-ui/swagger-ui-standalone-preset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger-ui/swagger-ui-standalone-preset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-cloud.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-cloud.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: travel-app/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: travel-app/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/smtp/ses_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/smtp/ses_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/environments.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/environments.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL gcp-key1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:38:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL gcp-key1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/sendgrid_api_key.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/sendgrid_api_key.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: *.env.mailer_dsn.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: *.env.mailer_dsn.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cardea/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cardea/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tmp/config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tmp/config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailgun/smtp_config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailgun/smtp_config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/backup/database.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/backup/database.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: destroy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: destroy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/backup/site.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/backup/site.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/aws_credentials.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/aws_credentials.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config/database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config/database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/caddy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/caddy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/mailer_dsn.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/mailer_dsn.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twilio.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twilio.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rest/variables was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:38:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rest/variables was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:38:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/keys/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/keys/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel.log.copy.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel.log.copy.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/aws_credentials.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/aws_credentials.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/data/config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/data/config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailgun/ses.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailgun/ses.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/servis.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/servis.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resend/api.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resend/api.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/db/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/db/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-key_temp.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-key_temp.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/stripe.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/stripe.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/data/config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/data/config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: todo-list/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: todo-list/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/json/secret.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/json/secret.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail/mailgun_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail/mailgun_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/data/settings.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/data/settings.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/mail/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/mail/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/uploads/dbdump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/uploads/dbdump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL gcp-key_elasticache was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:38:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL gcp-key_elasticache was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/keys/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/keys/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailgun/postmark_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailgun/postmark_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testsettings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testsettings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/keys was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-21 17:38:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/keys was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/static/sample.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/static/sample.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/network/themes.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/network/themes.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chromatograph/env.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chromatograph/env.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pt2/countries/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pt2/countries/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid/elasticemail.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid/elasticemail.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/keystone/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/keystone/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/test/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/test/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/new/wp-config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/new/wp-config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: applepay/token_map.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: applepay/token_map.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobile-app/server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobile-app/server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:38:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:38:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: domains/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: domains/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/json/config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/json/config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/data/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/data/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/hetzner.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/hetzner.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/secret.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/secret.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: post.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: post.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL articles/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:38:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL articles/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:38:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tsconfig.ec2.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tsconfig.ec2.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/04-many-to-many-relationship/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/04-many-to-many-relationship/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/packages/sendgrid.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/packages/sendgrid.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/php/sample.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/php/sample.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nuxt-app/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nuxt-app/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: downloads/.vscode/sftp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: downloads/.vscode/sftp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.secret ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.secret ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-network/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-network/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portfolios/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portfolios/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/php/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/php/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/sendgrid_api_key.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/sendgrid_api_key.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: confirm.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: confirm.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/upload/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/upload/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prototype/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prototype/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: metrics.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: metrics.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: includes/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: includes/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel.log.bak.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel.log.bak.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/config.swp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/config.swp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upgrade/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upgrade/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/keys/test.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/keys/test.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spectrometer/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spectrometer/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/session.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/session.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/aws_credentials.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/aws_credentials.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/yaml.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/yaml.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:38:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/new/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:38:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/new/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/secrets/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/secrets/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bkp/web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bkp/web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/smtp/sendgrid_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/smtp/sendgrid_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/lib64/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/lib64/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.secret ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.secret ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL grafana/api/admin/pause-all-alerts was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:39:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL grafana/api/admin/pause-all-alerts was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:39:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/ubuntu/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/ubuntu/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailer/sendgrid_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailer/sendgrid_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid/elasticemail.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid/elasticemail.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/json/test.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/json/test.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _nodes/ingest_process was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:39:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _nodes/ingest_process was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:39:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/mailgun_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/mailgun_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: function/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: function/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: github-connect/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: github-connect/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tsconfig.test.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tsconfig.test.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/data/test.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/data/test.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/api/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/api/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/laravel/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/laravel/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/uploads/db_backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/uploads/db_backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/php/config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/php/config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/stub.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/stub.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test/default.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test/default.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/php/test.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/php/test.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/sql/wp-config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/sql/wp-config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/bootstrap-local.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/bootstrap-local.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/sample.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/sample.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/db.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/db.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/modules/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/modules/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nestjs-app/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nestjs-app/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/tmp/test.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/tmp/test.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/main.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/main.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/settings.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/settings.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid/mailgun_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid/mailgun_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/site.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/site.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _nodes/discovery was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:39:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _nodes/discovery was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:39:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/data/info.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/data/info.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/laravel/docker-compose.codepipeline.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/laravel/docker-compose.codepipeline.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/old/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/old/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: invites/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: invites/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: knowledge/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: knowledge/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uwsgi.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uwsgi.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/app/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/app/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.pgsql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.pgsql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid/mailjet.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid/mailjet.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gitlab-ci/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gitlab-ci/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/did-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/did-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailgun/ses_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailgun/ses_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/drone.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/drone.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid/smtp_config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid/smtp_config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.11bc02d8.chunk.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.11bc02d8.chunk.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkout.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkout.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/sendgrid_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/sendgrid_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/index.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/index.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/confluence.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/confluence.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.ps1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.ps1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL gcp-key_codedeploy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:39:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL gcp-key_codedeploy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:39:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sql/site.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sql/site.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/config.temp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/config.temp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/install.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/install.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/data/site.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/data/site.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/drupal-test/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/drupal-test/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/local.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/local.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-key.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-key.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/php/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/php/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/old/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/old/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/keys/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/keys/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/sqladmin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/sqladmin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-gateway/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-gateway/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: x.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: x.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/module.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/module.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: *.env.* ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: *.env.* ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailgun/postmark.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailgun/postmark.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.User.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.User.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/ehcache.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/ehcache.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qv-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qv-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/worker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/worker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/main.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/main.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/smtp/mailgun.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/smtp/mailgun.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/notification.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/notification.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:13 --- ERROR: ErrorException [ 1 ]: Class 'Model_Settings' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2026-06-21 17:39:13 --- STRACE: ErrorException [ 1 ]: Class 'Model_Settings' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2026-06-21 17:39:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: angular/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: angular/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/upload/settings.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/upload/settings.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/static/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/static/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/json/config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/json/config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web-app/client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web-app/client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amplify/backend/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amplify/backend/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: esbuild.config.mjs.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: esbuild.config.mjs.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bugsnag/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bugsnag/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/view_on_site was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-21 17:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/view_on_site was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:39:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/mailgun_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/mailgun_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup1.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup1.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/keys/readme.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/keys/readme.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connection.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connection.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/mandrill.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/mandrill.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailgun/sparkpost_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailgun/sparkpost_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cache/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cache/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-key.orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-key.orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/plugin-editor.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/plugin-editor.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: food-app/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: food-app/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aws_credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:39:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aws_credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:39:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_info1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_info1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/volumeattachment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/volumeattachment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/sample.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/sample.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dotnet-app/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dotnet-app/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/development.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/development.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/old/readme.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/old/readme.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/log/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/log/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tmp/env.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tmp/env.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/xampp/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/xampp/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/old/info.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/old/info.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: control/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: control/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tsconfig.admin.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tsconfig.admin.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api-key~ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api-key~ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm/values-test.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm/values-test.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: paypal/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: paypal/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail/sendgrid_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail/sendgrid_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: region/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: region/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/data/log.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/data/log.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/backup/index.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/backup/index.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/overlay/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/overlay/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: layout/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: layout/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailgun/mandrill.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailgun/mandrill.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: integration/payments_bridge.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: integration/payments_bridge.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/grape_swagger.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/grape_swagger.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugins/.env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugins/.env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sites/default/files/backup_migrate/manual was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sites/default/files/backup_migrate/manual was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testinstall.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testinstall.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/smtp/sendgrid_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/smtp/sendgrid_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/main.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/main.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: view/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: view/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aPi/.EnV ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aPi/.EnV ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erp-app/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erp-app/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp/mandrill.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp/mandrill.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/old/sample.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/old/sample.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/data/database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/data/database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/classes/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/classes/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/sql/log.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/sql/log.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/symfony/debug/debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/symfony/debug/debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/app/private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/app/private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid/sendgrid_api_key.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid/sendgrid_api_key.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: golang-app/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: golang-app/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webpack.config.prod.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webpack.config.prod.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2020/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2020/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/network/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/network/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/paypal.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/paypal.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/keys/users.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/keys/users.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.mysql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.mysql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: booking-app/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: booking-app/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/keys/debug.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/keys/debug.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main-es2018.96dcf91e05121e327dcb.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main-es2018.96dcf91e05121e327dcb.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sysinfo.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sysinfo.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.netrc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.netrc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/laravel/cashier/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/laravel/cashier/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-key.tmp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-key.tmp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/jwt.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/jwt.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/keys/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/keys/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL azure-credentials_old was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:39:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL azure-credentials_old was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:39:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailer/elasticemail.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailer/elasticemail.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/aws_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/aws_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/data/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/data/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-key_backup.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-key_backup.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/backup/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/backup/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connection.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connection.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/settings.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/settings.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chargebacks/settings.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chargebacks/settings.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mesos/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mesos/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/test.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/test.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp.yml.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp.yml.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.xml.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.xml.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/kohana/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/kohana/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/private/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/private/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/secrets/readme.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/secrets/readme.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/keys/index.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/keys/index.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/examples/compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/examples/compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/data/info.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/data/info.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/sendgrid_api_key.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/sendgrid_api_key.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/laravel/**/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/laravel/**/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/db/backup/db.sql.lz4 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/db/backup/db.sql.lz4 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news-app/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news-app/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ikiwiki/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ikiwiki/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: callback/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: callback/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: partners/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: partners/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tmp/index.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tmp/index.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/terraform.tfstate.lock.info.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/terraform.tfstate.lock.info.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fixtures/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fixtures/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/wp/v2/pattern-directory was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:39:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/wp/v2/pattern-directory was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:39:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chat/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chat/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: register/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: register/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/sendgrid_api_key.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/sendgrid_api_key.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/validatingwebhookconfiguration.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/validatingwebhookconfiguration.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fitness-app/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fitness-app/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login-app/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login-app/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-21 17:39:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:39:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: metrics.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: metrics.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/email/sendgrid_api_key.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/email/sendgrid_api_key.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/docker-compose.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/docker-compose.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: token.temp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: token.temp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payment-app/client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payment-app/client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db/default.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db/default.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/smtp/sendgrid_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/smtp/sendgrid_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL db-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:39:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL db-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:39:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/json/database.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/json/database.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spearmint/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spearmint/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/ms-admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/ms-admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/env/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/env/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backup/sendgrid_keys was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:39:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backup/sendgrid_keys was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:39:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/private/sample.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/private/sample.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/backup/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/backup/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/aws_credentials.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/aws_credentials.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL administrator/language was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:39:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL administrator/language was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:39:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/smtp/sendgrid_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/smtp/sendgrid_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repository/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repository/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/openapi.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/openapi.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contracts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contracts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: food-app/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: food-app/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tsconfig.staging.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tsconfig.staging.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/data/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/data/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usage/metering.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usage/metering.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL gcp-key_ssm was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:39:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL gcp-key_ssm was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:39:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/mailgun_config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/mailgun_config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: delivery-app/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: delivery-app/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/backups/dbdump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/backups/dbdump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: well-known/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: well-known/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/public/default.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/public/default.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: remote/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: remote/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py.sample ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py.sample ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid/elasticemail_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid/elasticemail_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/public/main.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/public/main.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: next-app/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: next-app/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-key_elb.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-key_elb.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/readme.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/readme.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/secrets/sample.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/secrets/sample.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/ses.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/ses.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/internal was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-21 17:39:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/internal was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:39:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailgun/ses_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailgun/ses_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: token_local.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: token_local.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/new/log.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/new/log.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/eks/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/eks/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailgun_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailgun_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dotenv.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dotenv.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controller.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controller.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL :27019 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:39:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL :27019 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:39:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/backup/users.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/backup/users.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/public/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/public/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/sql/settings.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/sql/settings.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dev.env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dev.env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer.inc.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer.inc.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: decode.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: decode.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/network/ms-users.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/network/ms-users.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: styles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: styles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/login.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/login.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailchimp.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailchimp.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-key_root.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-key_root.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/laravel/.gitattributes ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/laravel/.gitattributes ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/php/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/php/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nav/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nav/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: l.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: l.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.mysql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.mysql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rails/mailers was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:39:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rails/mailers was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:39:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _cat/nodeattrs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:39:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _cat/nodeattrs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:39:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/sql/secret.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/sql/secret.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stager/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stager/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/mailgun_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/mailgun_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.mongodump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.mongodump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: booking-app/client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: booking-app/client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/json/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/json/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.ssh/authorized_keys ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.ssh/authorized_keys ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php.orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php.orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: freeppx/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: freeppx/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/fullwebsite.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/fullwebsite.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/php/secret.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/php/secret.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: requirements.eks.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: requirements.eks.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailer/mailjet.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailer/mailjet.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/openapi.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/openapi.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: panel/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: panel/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/secrets/db.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/secrets/db.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/modules/core/assets/js/trunks/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/modules/core/assets/js/trunks/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: siteinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: siteinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redirects/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redirects/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: audio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: audio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/secrets/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/secrets/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: token_prod.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: token_prod.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/network/ms-sites.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/network/ms-sites.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/smtp/ses.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/smtp/ses.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/keys/log.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/keys/log.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lms-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lms-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/new/readme.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/new/readme.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/user/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/user/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp/sendgrid_api_key.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp/sendgrid_api_key.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/sql/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/sql/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/plugin-qiankun/examples/app3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/plugin-qiankun/examples/app3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aws/metadata was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:39:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aws/metadata was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:39:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailgun.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailgun.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/fly.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/fly.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db/wp-config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db/wp-config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/login.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/login.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/test/sample.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/test/sample.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/db/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/db/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: saml.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: saml.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailgun/smtp.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailgun/smtp.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/secret.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/secret.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/sendgrid_api_key.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/sendgrid_api_key.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/new/env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/new/env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: digium_phones/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: digium_phones/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/public/wp-config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/public/wp-config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth-app/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth-app/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lms/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lms/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.602cea98.chunk.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.602cea98.chunk.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/backup/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/backup/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.temp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.temp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manage/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manage/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/keys/users.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/keys/users.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/*/.git-credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/*/.git-credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/new/wp-config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/new/wp-config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL var/backup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:39:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL var/backup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:39:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/*/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/*/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/mail/sendgrid_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/mail/sendgrid_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/db/login.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/db/login.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/monitor.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/monitor.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/env/database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/env/database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legacy/tests/9.1.1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legacy/tests/9.1.1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/laravel/docker-compose.ecr.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/laravel/docker-compose.ecr.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/mailgun.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/mailgun.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecommerce-app/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecommerce-app/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/public/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/public/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/backup/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/backup/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo-api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:39:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo-api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:39:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/smtp.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/smtp.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administration/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administration/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: esbuild.config.ts.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: esbuild.config.ts.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: snapshot/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: snapshot/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config/default.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config/default.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/info.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/info.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL secrets/sendgrid_config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:39:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL secrets/sendgrid_config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:39:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL database~ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:39:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL database~ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:39:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testtoken.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testtoken.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailgun/postmark_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailgun/postmark_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secure/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secure/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/application.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/application.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets/database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets/database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/old/database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/old/database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/default.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/default.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/new/config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/new/config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cache/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cache/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/network/update-core.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/network/update-core.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/db/backup/db.sql.lzma ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/db/backup/db.sql.lzma ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailgun/elasticemail_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailgun/elasticemail_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: organizations/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: organizations/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo_details was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:39:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo_details was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:39:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application-prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application-prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/keys/config.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/keys/config.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testfiles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testfiles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailgun/smtp.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailgun/smtp.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/env/config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/env/config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/backup/secret.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/backup/secret.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/aws_credentials.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/aws_credentials.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:39:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid/mailjet.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:39:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid/mailjet.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/default/files/private/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/default/files/private/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: token_eks.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: token_eks.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stackmon/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stackmon/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared/.env.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared/.env.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/backup/readme.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/backup/readme.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/payment_methods/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/payment_methods/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/keys/env.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/keys/env.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aws-codecommit was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:40:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aws-codecommit was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:40:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/public/database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/public/database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/backend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/backend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: synthetics/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: synthetics/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/static/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/static/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.shared ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.shared ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _nodes/ingest_usage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:40:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _nodes/ingest_usage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:40:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qrcode/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qrcode/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailgun/sendgrid_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailgun/sendgrid_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: woocommerce/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: woocommerce/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/test/sample.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/test/sample.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/character-service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/character-service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: newsletter.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: newsletter.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/develop/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/develop/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: express-app/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: express-app/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/db.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/db.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-key_admin.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-key_admin.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/static/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/static/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/public/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/public/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_credentials.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_credentials.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-key_local.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-key_local.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testauth.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testauth.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:40:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:40:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: memcache.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: memcache.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/smtp/sendgrid_api_key.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/smtp/sendgrid_api_key.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/mailgun_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/mailgun_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/new/debug.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/new/debug.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: httpboot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: httpboot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/keys/wp-config.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/keys/wp-config.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/old/main.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/old/main.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailgun/mailjet.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailgun/mailjet.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: FRONT/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: FRONT/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.ECS.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.ECS.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqlite.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqlite.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/data/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/data/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: external/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: external/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/static/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/static/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop-app/client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop-app/client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/new/users.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/new/users.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: canary/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: canary/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/mailjet.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/mailjet.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: profile/.vscode/sftp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: profile/.vscode/sftp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/new/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/new/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: onboarding/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: onboarding/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/secrets/main.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/secrets/main.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL grafana/api/alerts was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:40:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL grafana/api/alerts was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:40:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inventory-app/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inventory-app/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/keys/readme.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/keys/readme.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v4/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v4/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.Development.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.Development.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: order.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: order.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/secrets/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/secrets/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid/smtp.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid/smtp.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payment-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payment-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/vultr.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/vultr.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid/sendgrid_api_key.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid/sendgrid_api_key.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/shell.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/shell.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/profile.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/profile.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/upload/config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/upload/config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/cms/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/cms/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: post.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: post.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailgun/ses.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailgun/ses.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/lib/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/lib/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/open ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/open ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/private/log.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/private/log.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL gcp-key_master was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:40:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL gcp-key_master was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:40:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payment_gateway/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payment_gateway/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/sendgrid_api_key.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/sendgrid_api_key.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/wp-config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/wp-config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postgres.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postgres.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/knex.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/knex.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailer/sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailer/sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/eks/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/eks/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: *.env.example.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: *.env.example.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/smtp/sendgrid_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/smtp/sendgrid_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/old/users.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/old/users.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grails-app/conf/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grails-app/conf/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crypto/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crypto/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/private/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/private/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rails-app/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rails-app/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _next/data/*/index.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _next/data/*/index.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: *.env.docker.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: *.env.docker.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _cluster/settings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:40:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _cluster/settings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:40:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testconnection.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testconnection.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _nodes/ingest_thread_pool was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:40:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _nodes/ingest_thread_pool was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:40:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test/test.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test/test.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/wp/v2/patterns was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:40:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/wp/v2/patterns was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:40:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/backup/wp-config.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/backup/wp-config.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/fastly.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/fastly.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: saas/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: saas/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webpack.config.root.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webpack.config.root.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/env/info.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/env/info.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/sample.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/sample.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/mongodb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/mongodb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/keys/login.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/keys/login.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/wp/v2/widget-types was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:40:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/wp/v2/widget-types was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:40:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/wflogs/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/wflogs/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dev-api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:40:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dev-api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:40:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tmp/debug.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tmp/debug.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony-app/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony-app/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/active_support.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/active_support.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/horizontalpodautoscaler.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/horizontalpodautoscaler.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/static/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/static/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailgun/elasticemail.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailgun/elasticemail.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:40:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:40:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL __debug__/doc/tags was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:40:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL __debug__/doc/tags was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:40:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL artemis/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:40:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL artemis/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:40:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-key.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-key.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/private/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/private/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/netlify.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/netlify.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _nodes/info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:40:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _nodes/info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:40:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL gcp-key_s3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:40:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL gcp-key_s3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:40:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp/mailjet.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp/mailjet.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid/postmark.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid/postmark.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/private/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/private/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/dashboard/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/dashboard/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cache/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cache/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/magento/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/magento/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amplify/backend/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amplify/backend/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Travel_form/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Travel_form/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: delivery-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: delivery-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/json/database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/json/database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL gcp-key~ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:40:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL gcp-key~ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:40:20 --- ERROR: ErrorException [ 1 ]: Class 'Model_Settings' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2026-06-21 17:40:20 --- STRACE: ErrorException [ 1 ]: Class 'Model_Settings' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2026-06-21 17:40:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/storage/logs/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/storage/logs/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: noVNC/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: noVNC/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/appagebuilder/config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/appagebuilder/config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailgun/mailer.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailgun/mailer.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: publics/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: publics/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/silex/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/silex/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recordings/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recordings/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/drizzle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/drizzle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tmp/index.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tmp/index.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/sendgrid_api_key.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/sendgrid_api_key.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/mailgun_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/mailgun_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/incremental.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/incremental.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sql/index.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sql/index.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erp-app/client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erp-app/client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/static/info.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/static/info.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/assets/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/assets/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/stripe.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/stripe.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tmp/readme.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tmp/readme.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm/values-service.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm/values-service.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/json/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/json/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/serverless.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/serverless.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/pod.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/pod.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sql/database.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sql/database.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payment-app/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payment-app/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/laravel/docker-compose.cloudformation.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/laravel/docker-compose.cloudformation.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/upload/info.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/upload/info.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid/mailgun.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid/mailgun.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testconn.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testconn.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rbac/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rbac/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/adminer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/adminer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scada/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scada/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: q.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: q.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions.php.copy ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions.php.copy ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/staging.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/staging.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/new/users.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/new/users.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/upload/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/upload/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/modules/smss/vmblast/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/modules/smss/vmblast/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inventory-app/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inventory-app/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/old/db.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/old/db.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/test/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/test/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/private.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/private.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpsysinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:40:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpsysinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:40:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/callretry was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:40:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/callretry was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:40:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/private/config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/private/config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/json/log.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/json/log.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/index.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/index.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: codeigniter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: codeigniter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/login.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/login.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/smtp/mailgun_config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/smtp/mailgun_config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-21 17:40:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:40:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailgun/smtp_config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailgun/smtp_config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/smtp/mailgun_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/smtp/mailgun_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/info.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/info.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/wp/v2/widgets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:40:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/wp/v2/widgets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:40:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: search.php.tmp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: search.php.tmp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/quartz was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:40:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/quartz was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:40:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test/login.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test/login.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailer/ses.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailer/ses.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/changelog.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/changelog.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/aws_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/aws_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/secrets/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/secrets/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: srv/aws_credentials.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: srv/aws_credentials.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feature/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feature/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/new/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/new/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/upload/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/upload/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: braintree/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: braintree/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test6.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test6.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/vercel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/vercel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blob/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blob/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: react/.env.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: react/.env.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: proxies/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: proxies/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailgun/elasticemail.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailgun/elasticemail.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/env/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/env/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/mail/sendgrid_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/mail/sendgrid_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: InstantCV/server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: InstantCV/server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/config.orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/config.orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/mail/mailgun_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/mail/mailgun_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ready/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ready/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/test/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/test/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Socketio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Socketio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_keys.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_keys.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/keys/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/keys/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailgun/ses_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailgun/ses_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: views/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: views/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: $(pwd)/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: $(pwd)/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: club/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: club/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/wp/v2/navigation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:40:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/wp/v2/navigation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:40:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/mailgun_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/mailgun_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.ssh/authorized_keys ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.ssh/authorized_keys ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/static/env.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/static/env.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL __debug__/jsi18n was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:40:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL __debug__/jsi18n was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:40:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/default/files/backup_migrate/backups/full ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/default/files/backup_migrate/backups/full ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/secrets/main.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/secrets/main.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: svelte-app/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: svelte-app/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm/values-sqs.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm/values-sqs.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static_root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static_root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/static/login.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/static/login.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel.log.copy.backup.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel.log.copy.backup.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vercel.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vercel.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: *.env.mailgun ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: *.env.mailgun ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: buildkite/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: buildkite/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: eb/.elasticbeanstalk/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: eb/.elasticbeanstalk/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/db/backup/db.sql.lzo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/db/backup/db.sql.lzo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtu/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtu/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: search.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: search.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.Test.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.Test.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/env/log.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/env/log.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/config.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/config.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erp-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erp-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid/ses_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid/ses_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/secrets/test.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/secrets/test.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: token_master.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: token_master.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecommerce-app/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecommerce-app/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stackato-pkg/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stackato-pkg/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: whatsapp-bot/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: whatsapp-bot/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tmp/info.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tmp/info.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/audio.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/audio.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/laravel-2023.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/laravel-2023.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fedex/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fedex/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news-app/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news-app/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/component.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/component.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: subscribe.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: subscribe.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/private/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/private/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Simple_server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Simple_server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/php/index.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/php/index.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payment.php.swp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payment.php.swp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL waku/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:40:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL waku/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:40:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/json/settings.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/json/settings.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/new/main.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/new/main.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/seed.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/seed.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _layouts/15/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:40:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _layouts/15/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:40:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.temp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.temp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/sql/site.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/sql/site.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/backup/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/backup/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/new/users.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/new/users.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/aws_credentials.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/aws_credentials.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/backup/info.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/backup/info.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp.json.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp.json.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testme.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testme.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL var/export was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:40:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL var/export was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:40:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/readme.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/readme.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/static/site.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/static/site.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/couchdb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/couchdb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.php.swp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.php.swp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL grafana/api/search was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 17:40:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL grafana/api/search was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 17:40:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/log/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/log/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web-app/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web-app/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-dotenv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-dotenv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:40:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-firebase-authentication-serverless/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 17:40:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-firebase-authentication-serverless/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 17:44:26 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-21 17:44:26 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-21 18:10:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mcp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 18:10:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mcp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 18:10:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sse was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 18:10:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sse was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 18:10:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 18:10:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 19:12:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 19:12:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 19:12:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 19:12:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 20:22:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 20:22:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 20:29:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL portal/redlion was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 20:29:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL portal/redlion was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 20:33:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 20:33:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 21:29:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 21:29:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 21:30:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 21:30:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 22:17:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 22:17:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 22:18:24 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-21 22:18:24 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-21 22:27:43 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-21 22:27:43 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-21 22:28:26 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-21 22:28:26 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-21 22:29:07 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-21 22:29:07 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-21 22:29:52 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-21 22:29:52 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-21 22:30:02 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-21 22:30:02 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-21 22:30:25 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-21 22:30:25 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-21 22:31:03 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-21 22:31:03 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-21 22:48:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 22:48:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 22:48:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 1ink5qsie_ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 22:48:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 1ink5qsie_ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 22:55:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 22:55:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 22:55:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL eicaam062dxqs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 22:55:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL eicaam062dxqs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 23:03:59 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-21 23:03:59 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-21 23:03:59 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-21 23:03:59 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-21 23:03:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 23:03:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 23:03:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL odinhttpcall1782072239 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 23:03:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL odinhttpcall1782072239 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 23:03:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 23:03:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 23:03:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL evox/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 23:03:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL evox/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 23:04:00 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-21 23:04:00 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-21 23:04:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 23:04:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 23:04:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/authLogin.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 23:04:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/authLogin.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 23:04:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 23:04:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 23:04:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin/info/system was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 23:04:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin/info/system was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 23:04:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin/cores was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 23:04:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin/cores was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-21 23:04:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 23:04:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 23:49:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 23:49:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 23:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-21 23:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-21 23:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL k41nsb4g37j was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-21 23:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL k41nsb4g37j was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}