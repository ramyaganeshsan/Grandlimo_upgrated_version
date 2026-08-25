<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2025-01-02 00:26:09 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
2025-01-02 00:26:09 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
--
#0 /var/www/html/application/classes/common_config.php(328): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 328, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-01-02 01:02:45 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
2025-01-02 01:02:45 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
--
#0 /var/www/html/application/classes/common_config.php(328): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 328, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-01-02 01:24:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 01:24:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 01:45:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-02 01:45:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-02 02:00:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stalker_portal/server/tools/auth_simple.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 02:00:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stalker_portal/server/tools/auth_simple.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 02:29:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 02:29:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 02:29:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 02:29:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 02:35:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 02:35:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 02:35:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-02 02:35:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-02 03:00:35 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
2025-01-02 03:00:35 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
--
#0 /var/www/html/application/classes/common_config.php(328): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 328, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-01-02 03:27:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 03:27:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 03:57:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 03:57:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 04:20:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 04:20:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 04:20:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 04:20:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 04:20:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 04:20:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 04:20:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 04:20:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 04:20:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 04:20:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 04:20:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 04:20:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 04:20:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 04:20:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 04:20:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 04:20:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 04:20:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 04:20:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 04:20:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 04:20:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 04:20:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 04:20:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 04:20:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 04:20:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 04:20:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 04:20:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 04:20:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 04:20:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 04:20:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 04:20:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 04:20:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 04:20:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 04:20:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 04:20:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 04:20:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 04:20:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 04:20:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 04:20:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 04:20:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 04:20:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 04:20:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 04:20:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 04:20:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 04:20:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 04:20:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 04:20:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 04:20:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 04:20:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 04:20:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 04:20:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 04:20:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 04:20:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 04:20:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 04:20:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 04:20:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 04:20:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 04:20:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 04:20:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 04:20:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 04:20:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 04:20:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 04:20:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 04:20:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 04:20:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 04:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 04:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 04:49:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-02 04:49:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-02 05:01:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 05:01:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 05:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-02 05:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-02 05:37:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-02 05:37:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-02 06:48:43 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-01-02 06:48:43 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-01-02 07:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 07:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 07:06:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 07:06:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 08:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 08:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 09:10:53 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
2025-01-02 09:10:53 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
--
#0 /var/www/html/application/classes/common_config.php(328): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 328, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-01-02 09:25:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 09:25:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 09:47:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 09:47:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/admin/v1/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/admin/v1/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/admin/v1/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/admin/v1/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/cloud/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/cloud/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/admin/v3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/admin/v3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alpha/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alpha/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/admin/v2/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/admin/v2/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aomanalyzer/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aomanalyzer/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/admin/v4/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/admin/v4/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/email/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/email/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/admin/v3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/admin/v3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/admin/v4/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/admin/v4/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/admin/v2/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/admin/v2/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amphtml/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amphtml/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/aws/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/aws/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/internal/services/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/internal/services/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/mail/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/mail/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/user/v1/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/user/v1/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/user/v2/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/user/v2/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/user/v3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/user/v3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/notification/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/notification/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/smtp/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/smtp/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/user/v2/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/user/v2/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/user/v1/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/user/v1/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/user/v4/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/user/v4/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/user/v3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/user/v3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/user/v4/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/user/v4/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v2/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v2/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v2/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v2/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/services/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/services/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v2/services/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v2/services/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/email/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/email/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/modules/api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/modules/api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v4/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v4/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/mail/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v4/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/mail/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v4/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/core/services/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/core/services/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/notification/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/notification/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/services/smtp/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/services/smtp/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/services/mail/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/services/mail/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/services/mailer/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/services/mailer/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/services/notifications/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/services/notifications/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/aws/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/aws/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/email/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/email/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/services/workers/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/services/workers/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/mail/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/mail/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/modules/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/modules/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/smtp/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/smtp/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/mail/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/mail/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: communications/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: communications/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connectors/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connectors/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/email/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/email/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/mail/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/mail/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/notifications/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/notifications/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/services/mail/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/services/mail/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gateway/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gateway/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gateway/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gateway/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flock/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flock/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: git/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: git/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: integrations/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: integrations/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/mail/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/mail/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jobs/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jobs/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old-cuburn/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old-cuburn/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugins/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugins/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/mail/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/mail/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repository/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repository/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repos/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repos/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: notifications/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: notifications/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/auth/api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/auth/api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scheduled/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scheduled/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legacy/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legacy/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __MACOSX/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __MACOSX/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samples/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samples/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/aws-ses/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/aws-ses/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: m/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: m/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: queue/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: queue/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repository/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repository/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/billing/api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/billing/api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/email/sendgrid/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/email/sendgrid/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/notifications/push/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/notifications/push/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/user/api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/user/api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/mail/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/mail/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/email/aws/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/email/aws/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/smtp/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/smtp/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/services/mail/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/services/mail/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/email/mailjet/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: store/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: store/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/email/mailjet/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/email/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/email/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/mailjet/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/mailjet/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/mailer-config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/mailer-config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/mail-service/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/mail-service/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared/mail/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared/mail/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/email/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/email/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/services/notifications/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/services/notifications/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wiki/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wiki/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/custom-theme/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/custom-theme/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/js/.git/config/admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/js/.git/config/admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/mu-plugins/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/mu-plugins/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/custom-plugin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/custom-plugin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: store/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: store/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: workers/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: workers/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:31:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:31:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:31:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 11:31:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 11:41:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-02 11:41:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-02 11:45:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-02 11:45:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-02 12:16:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/PTZOptics_powerby.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 12:16:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/PTZOptics_powerby.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 12:36:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autodiscover/autodiscover.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 12:36:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autodiscover/autodiscover.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 12:50:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hudson was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-02 12:50:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hudson was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-02 13:18:44 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/public/uploads/notification_image/677668047f086Buddha_Bothi_Tree_resized_2048x1152.webp ~ MODPATH/image/classes/kohana/image.php [ 107 ]
2025-01-02 13:18:44 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/public/uploads/notification_image/677668047f086Buddha_Bothi_Tree_resized_2048x1152.webp ~ MODPATH/image/classes/kohana/image.php [ 107 ]
--
#0 /var/www/html/modules/image/classes/kohana/image/gd.php(91): Kohana_Image->__construct('/var/www/html/p...')
#1 /var/www/html/modules/image/classes/kohana/image.php(54): Kohana_Image_GD->__construct('/var/www/html/p...')
#2 /var/www/html/application/classes/controller/manage.php(10638): Kohana_Image::factory('/var/www/html/p...')
#3 [internal function]: Controller_Manage->action_send_notification()
#4 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Manage))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(115): Kohana_Request->execute()
#8 {main}
2025-01-02 13:18:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 13:18:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 13:48:58 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
2025-01-02 13:48:58 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
--
#0 /var/www/html/application/classes/common_config.php(328): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 328, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-01-02 13:51:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vpnsvc/connect.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 13:51:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vpnsvc/connect.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 14:21:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 14:21:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 16:06:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-02 16:06:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-02 16:20:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-02 16:20:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-02 16:20:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-02 16:20:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-02 16:49:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-02 16:49:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-02 16:52:48 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-01-02 16:52:48 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-01-02 17:01:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 17:01:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 17:08:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-02 17:08:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-02 17:14:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 17:14:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 17:14:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 17:14:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 17:14:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 17:14:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 17:14:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 17:14:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 17:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 17:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 17:15:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 17:15:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 17:15:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 17:15:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 17:15:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 17:15:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 17:15:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 17:15:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 17:15:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 17:15:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 17:15:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 17:15:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 17:15:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 17:15:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 17:27:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-02 17:27:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-02 17:34:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-02 17:34:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-02 17:43:52 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-01-02 17:43:52 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-01-02 18:58:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 18:58:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 19:13:07 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
2025-01-02 19:13:07 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
--
#0 /var/www/html/application/classes/common_config.php(328): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 328, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-01-02 20:21:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/settings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-01-02 20:21:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/settings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-02 20:31:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-02 20:31:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-02 21:03:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/avalanch.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 21:03:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/avalanch.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 21:06:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/historypage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 21:06:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/historypage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 21:06:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 21:06:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 21:06:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: license.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 21:06:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: license.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 21:07:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-json was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-02 21:07:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-json was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-02 21:07:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webfig was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-02 21:07:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webfig was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-02 21:07:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/authLogin.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 21:07:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/authLogin.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 21:07:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zabbix/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 21:07:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zabbix/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 21:07:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 21:07:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 21:08:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solr was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-02 21:08:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solr was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-02 21:08:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Telerik.Web.UI.WebResource.axd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 21:08:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Telerik.Web.UI.WebResource.axd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 21:08:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon-32x32.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 21:08:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon-32x32.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 21:08:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 21:08:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 21:08:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ext-js/app/common/zld_product_spec.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 21:08:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ext-js/app/common/zld_product_spec.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 21:08:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owncloud/status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 21:08:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owncloud/status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 21:08:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 21:08:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 21:08:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sugar_version.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 21:08:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sugar_version.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 21:08:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL partymgr/control/main was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-02 21:08:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL partymgr/control/main was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-02 21:08:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/session/properties was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-01-02 21:08:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/session/properties was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-02 21:08:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/NewWindow_2_all.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 21:08:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/NewWindow_2_all.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 21:08:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cf_scripts/scripts/ajax/ckeditor/ckeditor.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 21:08:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cf_scripts/scripts/ajax/ckeditor/ckeditor.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 21:08:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.do ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 21:08:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.do ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 21:09:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-02 21:09:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-02 21:09:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL identity was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-02 21:09:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL identity was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-02 21:09:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: showLogin.cc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 21:09:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: showLogin.cc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 21:09:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL internal_forms_authentication was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-02 21:09:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL internal_forms_authentication was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-02 21:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: OA_HTML/AppsLocalLogin.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 21:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: OA_HTML/AppsLocalLogin.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 21:09:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL WebInterface was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-02 21:09:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL WebInterface was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-02 21:09:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitecore/shell/sitecore.version.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 21:09:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitecore/shell/sitecore.version.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 21:09:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aspera/faspex was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-02 21:09:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aspera/faspex was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-02 21:09:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/main.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 21:09:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/main.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 21:17:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 21:17:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 21:20:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-02 21:20:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-02 21:21:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-02 21:21:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-02 21:25:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-02 21:25:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-02 21:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 21:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 22:43:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 22:43:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 22:56:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logon.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 22:56:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logon.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 23:24:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL computeMetadata/v1/project was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-02 23:24:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL computeMetadata/v1/project was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-02 23:35:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-02 23:35:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-02 23:51:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-02 23:51:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-02 23:57:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-02 23:57:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}