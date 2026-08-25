<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2026-05-06 00:14:17 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-05-06 00:14:17 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-05-06 00:16:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 00:16:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 00:16:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 00:16:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 00:49:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 00:49:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 00:50:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userRpm/MenuRpm.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 00:50:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userRpm/MenuRpm.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 00:50:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 00:50:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 00:56:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 00:56:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 00:59:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL bibmbplvmvzwr was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 00:59:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL bibmbplvmvzwr was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 01:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/luci/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 01:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/luci/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 01:11:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: currentsetting.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 01:11:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: currentsetting.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 01:13:14 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-05-06 01:13:14 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-05-06 03:05:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 03:05:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 03:06:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 03:06:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 03:35:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sslvpn_logon.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 03:35:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sslvpn_logon.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 03:44:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 03:44:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 03:44:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 03:44:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 03:44:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 03:44:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 04:06:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 04:06:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 04:06:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 04:06:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 04:06:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 04:06:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 04:06:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 04:06:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 04:06:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 04:06:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 04:06:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 04:06:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 04:06:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 04:06:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 04:06:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 04:06:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 04:06:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 04:06:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 04:06:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 04:06:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 04:06:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 04:06:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 04:06:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 04:06:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 04:06:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 04:06:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 04:06:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 04:06:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 04:06:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 04:06:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 04:06:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 04:06:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 04:06:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 04:06:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 04:06:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 04:06:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 04:06:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 04:06:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 04:06:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 04:06:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 04:06:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 04:06:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 04:06:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 04:06:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 04:06:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 04:06:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 04:06:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 04:06:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 04:06:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 04:06:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 04:06:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 04:06:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 04:06:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 04:06:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 04:06:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 04:06:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 04:06:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 04:06:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 04:06:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 04:06:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 04:06:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 04:06:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 04:06:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 04:06:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 04:16:27 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2026-05-06 04:16:27 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2026-05-06 04:25:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 04:25:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 05:47:25 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-05-06 05:47:25 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-05-06 05:54:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 05:54:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 05:56:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 05:56:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 06:07:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 06:07:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 06:30:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: RDWeb/Pages/en-US/login.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 06:30:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: RDWeb/Pages/en-US/login.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 08:54:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 08:54:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 08:54:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL jjcp_n12ctle8 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 08:54:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL jjcp_n12ctle8 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 09:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 09:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 09:41:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ReportServer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 09:41:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ReportServer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 10:58:55 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2026-05-06 10:58:55 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2026-05-06 10:58:56 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2026-05-06 10:58:56 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2026-05-06 10:58:56 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2026-05-06 10:58:56 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2026-05-06 11:29:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: currentsetting.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 11:29:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: currentsetting.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 11:54:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 11:54:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 11:54:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 11:54:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 12:11:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 12:11:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 12:19:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 12:19:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 12:19:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 12:19:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 12:19:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 12:19:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 12:19:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 12:19:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 12:19:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 12:19:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 12:19:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 12:19:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 12:19:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 12:19:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 12:19:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 12:19:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 12:19:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 12:19:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 12:19:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 12:19:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 12:19:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 12:19:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 12:19:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 12:19:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 12:19:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 12:19:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 12:19:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 12:19:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 12:19:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 12:19:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 12:19:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 12:19:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 12:19:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 12:19:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 12:19:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 12:19:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 12:49:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 12:49:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 12:49:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 12:49:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 12:49:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 12:49:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 12:49:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 12:49:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 12:49:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nobody/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 12:49:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nobody/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 12:50:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 12:50:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 12:50:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 12:50:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 12:50:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: skin/default_1/images/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 12:50:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: skin/default_1/images/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 12:50:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 12:50:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 12:58:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ui/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 12:58:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ui/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 13:03:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:03:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:04:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:04:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:04:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lkpllws9d_pjiy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 13:04:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lkpllws9d_pjiy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap_index.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap_index.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serviceAccountKey.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serviceAccountKey.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-admin.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-admin.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cert.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cert.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: key.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: key.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: privatekey.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: privatekey.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: id_rsa.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: id_rsa.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serviceAccountKey.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serviceAccountKey.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-admin.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-admin.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cert.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cert.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: key.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: key.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: privatekey.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: privatekey.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: id_rsa.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: id_rsa.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/heapdump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/heapdump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/configprops was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/configprops was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.crt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.crt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL id_rsa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL id_rsa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL key was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL key was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-includes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-includes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL var/www/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL var/www/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/configprops was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/configprops was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.crt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.crt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 13:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 13:33:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/heapdump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 13:33:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/heapdump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 13:33:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 13:33:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 13:33:20 --- ERROR: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
2026-05-06 13:33:20 --- STRACE: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
--
#0 /var/www/html/application/classes/controller/users.php(3869): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 3869, Array)
#1 [internal function]: Controller_Users->action_change_language()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-05-06 13:33:20 --- ERROR: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
2026-05-06 13:33:20 --- STRACE: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(1303): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 1303, Array)
#1 [internal function]: Controller_Passengers->action_login()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-05-06 13:33:20 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2026-05-06 13:33:20 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-05-06 13:33:20 --- ERROR: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2026-05-06 13:33:20 --- STRACE: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2026-05-06 13:33:20 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1667 ]
2026-05-06 13:33:20 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1667 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2026-05-06 13:33:20 --- ERROR: ErrorException [ 1 ]: Class 'Db' not found ~ APPPATH/classes/model/passengers.php [ 2993 ]
2026-05-06 13:33:20 --- STRACE: ErrorException [ 1 ]: Class 'Db' not found ~ APPPATH/classes/model/passengers.php [ 2993 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2026-05-06 13:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL id_rsa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 13:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL id_rsa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 13:33:21 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1531 ]
2026-05-06 13:33:21 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1531 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2026-05-06 13:33:21 --- ERROR: ErrorException [ 8 ]: Undefined index: time_zone ~ APPPATH/classes/controller/company.php [ 959 ]
2026-05-06 13:33:21 --- STRACE: ErrorException [ 8 ]: Undefined index: time_zone ~ APPPATH/classes/controller/company.php [ 959 ]
--
#0 /var/www/html/application/classes/controller/company.php(959): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 959, Array)
#1 [internal function]: Controller_Company->action_getfreetrial()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Company))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-05-06 13:33:21 --- ERROR: ErrorException [ 1 ]: Class 'Db' not found ~ APPPATH/classes/model/company.php [ 1818 ]
2026-05-06 13:33:21 --- STRACE: ErrorException [ 1 ]: Class 'Db' not found ~ APPPATH/classes/model/company.php [ 1818 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2026-05-06 13:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 13:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 13:33:21 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1525 ]
2026-05-06 13:33:21 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1525 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2026-05-06 13:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-includes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 13:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-includes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 13:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL key was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 13:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL key was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 13:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 13:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 13:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL embed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 13:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL embed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 13:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hqdefault.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hqdefault.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL player was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 13:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL player was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 13:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL var/www/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 13:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL var/www/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 13:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL users/job was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-05-06 13:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL users/job was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 13:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passengers/how_it_works.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passengers/how_it_works.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passengers/pricing.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passengers/pricing.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passengers/www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passengers/www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/how_it_works.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/how_it_works.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/pricing.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/pricing.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 13:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 13:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/application/classes/controller/passengers.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/application/classes/controller/passengers.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/application/views/themes/default/template.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/application/views/themes/default/template.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:21 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2026-05-06 13:33:21 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-05-06 13:33:21 --- ERROR: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
2026-05-06 13:33:21 --- STRACE: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(1303): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 1303, Array)
#1 [internal function]: Controller_Passengers->action_login()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-05-06 13:33:21 --- ERROR: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2026-05-06 13:33:21 --- STRACE: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2026-05-06 13:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/application/classes/controller/users.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/application/classes/controller/users.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/how_it_works.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/how_it_works.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/pricing.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/pricing.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:21 --- ERROR: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
2026-05-06 13:33:21 --- STRACE: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
--
#0 /var/www/html/application/classes/controller/users.php(3869): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 3869, Array)
#1 [internal function]: Controller_Users->action_change_language()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-05-06 13:33:21 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1667 ]
2026-05-06 13:33:21 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1667 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2026-05-06 13:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/application/classes/controller/company.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/application/classes/controller/company.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:22 --- ERROR: ErrorException [ 1 ]: Class 'Db' not found ~ APPPATH/classes/model/passengers.php [ 2993 ]
2026-05-06 13:33:22 --- STRACE: ErrorException [ 1 ]: Class 'Db' not found ~ APPPATH/classes/model/passengers.php [ 2993 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2026-05-06 13:33:22 --- ERROR: ErrorException [ 1 ]: Class 'Db' not found ~ APPPATH/classes/model/passengers.php [ 2993 ]
2026-05-06 13:33:22 --- STRACE: ErrorException [ 1 ]: Class 'Db' not found ~ APPPATH/classes/model/passengers.php [ 2993 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2026-05-06 13:33:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/application/views/admin/template.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/application/views/admin/template.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:22 --- ERROR: ErrorException [ 8 ]: Undefined index: time_zone ~ APPPATH/classes/controller/company.php [ 959 ]
2026-05-06 13:33:22 --- STRACE: ErrorException [ 8 ]: Undefined index: time_zone ~ APPPATH/classes/controller/company.php [ 959 ]
--
#0 /var/www/html/application/classes/controller/company.php(959): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 959, Array)
#1 [internal function]: Controller_Company->action_getfreetrial()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Company))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-05-06 13:33:22 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1531 ]
2026-05-06 13:33:22 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1531 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2026-05-06 13:33:22 --- ERROR: ErrorException [ 1 ]: Class 'Db' not found ~ APPPATH/classes/model/company.php [ 1818 ]
2026-05-06 13:33:22 --- STRACE: ErrorException [ 1 ]: Class 'Db' not found ~ APPPATH/classes/model/company.php [ 1818 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2026-05-06 13:33:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL embed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 13:33:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL embed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 13:33:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL embed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 13:33:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL embed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 13:33:22 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1525 ]
2026-05-06 13:33:22 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1525 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2026-05-06 13:33:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hqdefault.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 13:33:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hqdefault.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 13:33:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL player was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 13:33:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL player was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 13:33:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL player was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 13:33:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL player was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 13:45:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Dr0v was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 13:45:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Dr0v was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 14:08:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 14:08:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 14:08:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 14:08:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 14:08:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 14:08:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 14:08:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 14:08:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 14:08:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 14:08:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 14:08:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 14:08:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 14:21:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 14:21:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 14:23:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 14:23:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 15:39:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:39:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:48:30 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-05-06 15:48:30 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-05-06 15:56:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stager/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stager/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: well-known/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: well-known/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ts/prime/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ts/prime/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: unixtime/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: unixtime/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: SpotiApps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: SpotiApps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modloader/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modloader/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mnt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mnt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postfixadmin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postfixadmin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/new/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/new/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: clld_dir/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: clld_dir/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: $(pwd)/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: $(pwd)/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py.tmp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py.tmp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fastlane/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fastlane/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Serve_time_server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Serve_time_server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mentorg-lava-docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mentorg-lava-docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: electron_app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: electron_app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ledger_sync/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ledger_sync/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resourcesync/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resourcesync/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/views/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/views/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftpmaster/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftpmaster/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ubuntu/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ubuntu/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temanr10/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temanr10/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bitdefender/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bitdefender/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qiskit/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qiskit/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samples/docker/deploymentscripts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samples/docker/deploymentscripts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.example ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.example ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nuxt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nuxt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/php/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/php/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/static/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/static/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/__tests__/__fixtures__/instanceWithDependentSteps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/__tests__/__fixtures__/instanceWithDependentSteps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/keys/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/keys/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: includes/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: includes/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fileserver/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fileserver/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/backup/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/backup/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/new/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/new/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amazonpay/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amazonpay/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailman/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailman/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/test/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/test/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: noVNC/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: noVNC/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sidecar/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sidecar/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nextjs-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nextjs-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue_CRM/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue_CRM/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rails-api/react-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rails-api/react-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/secrets/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/secrets/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: profile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: profile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: saas/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: saas/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: error/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: error/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.env.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.env.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/secrets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/secrets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodejs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodejs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: httpboot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: httpboot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 09-managing-state/begin/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 09-managing-state/begin/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py.sample ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py.sample ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: function/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: function/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: "/database.yml", ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: "/database.yml", ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/old/database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/old/database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feature/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feature/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webadmin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webadmin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: InstantCV/server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: InstantCV/server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app2-static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app2-static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front-empathy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front-empathy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/old/db.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/old/db.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:56:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/character-service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:56:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/character-service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/console/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/console/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/private/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/private/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fixtures/blocks/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fixtures/blocks/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/aws/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/aws/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/test/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/test/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vars/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vars/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aPpLiCaTiOn.yMl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aPpLiCaTiOn.yMl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: roundcube/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: roundcube/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webhooks/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webhooks/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: be/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: be/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: "/src/main/resources/application.properties", ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: "/src/main/resources/application.properties", ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/framework/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/framework/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/styled-ui-docs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/styled-ui-docs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: eftpos/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: eftpos/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/backup/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/backup/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gists/cache/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gists/cache/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/sql/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/sql/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/keys/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/keys/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/backups/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/backups/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: restiapps/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: restiapps/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/test/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/test/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selfish-darling-backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selfish-darling-backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/test/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/test/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: proton/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: proton/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontendfinaltest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontendfinaltest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/test/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/test/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dotfiles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dotfiles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/backup/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/backup/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/old/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/old/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/static/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/static/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mpesa/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mpesa/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pfbe/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pfbe/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/cronlab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/cronlab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared/.env.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared/.env.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: :8080/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: :8080/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sandbox/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sandbox/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: react_todo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: react_todo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yml.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yml.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/php/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/php/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/aws_credentials.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/aws_credentials.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/public/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/public/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/php/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/php/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: export/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: export/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.yml.tmp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.yml.tmp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: :8443/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: :8443/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: workspace/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: workspace/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/old/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/old/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fog/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fog/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/dockers/mariadb-test/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/dockers/mariadb-test/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env.development ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env.development ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phalcon/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phalcon/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: desktop_app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: desktop_app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: panel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: panel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: community/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: community/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ruby_app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ruby_app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: netcoremail/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: netcoremail/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _wpeprivate/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _wpeprivate/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: custom_config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: custom_config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pOrTaL/.eNv ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pOrTaL/.eNv ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/old/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/old/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: price_hawk_client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: price_hawk_client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapp/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapp/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uSeRs/.EnV ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uSeRs/.EnV ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/registry/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/registry/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: FRONT/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: FRONT/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/secrets/db.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/secrets/db.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js-plugin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js-plugin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/edv-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/edv-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: srv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: srv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/old/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/old/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bkp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bkp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/.aws/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/.aws/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.back ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.back ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudfront/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudfront/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.development ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.development ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nextjs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nextjs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: iotedge/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: iotedge/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django-blog/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django-blog/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zmusic-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zmusic-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static-collected/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static-collected/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localstack/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localstack/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: outputs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: outputs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotpot-app-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotpot-app-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: profile/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: profile/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/payments/credentials.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/payments/credentials.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: register/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: register/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets/debug.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets/debug.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssi/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssi/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flux/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flux/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: codenames-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: codenames-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: include/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: include/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurly/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurly/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets/db.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets/db.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nlp/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nlp/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: e2e/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: e2e/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sessions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sessions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/modules/core/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/modules/core/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lidar/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lidar/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: integration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: integration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rust-backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rust-backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: srv6_controller/node-manager/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: srv6_controller/node-manager/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/credentials.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/credentials.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: $(pwd)/.env.development ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: $(pwd)/.env.development ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stylesheets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stylesheets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wEb/.EnV ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wEb/.EnV ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci-cd/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci-cd/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/aries-js-worker/fixtures/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/aries-js-worker/fixtures/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storefront/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storefront/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: handler/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: handler/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/backup/db.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/backup/db.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postgres/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postgres/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image_data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image_data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets/config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets/config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties.sample ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties.sample ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packed/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packed/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: custom-hsm/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: custom-hsm/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-network/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-network/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/secrets.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/secrets.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: streaming/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: streaming/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: statsd/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: statsd/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/.env.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/.env.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/.env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/.env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back-api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back-api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Nodejs-Projects/play-ground/login/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Nodejs-Projects/play-ground/login/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdw-backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdw-backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boxes/oracle-vagrant-boxes/ContainerRegistry/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boxes/oracle-vagrant-boxes/ContainerRegistry/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: middleware/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: middleware/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssl/certs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssl/certs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rainloop/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rainloop/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-become/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-become/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: angular/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: angular/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: freeppx/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: freeppx/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: monitoring/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: monitoring/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: acme-challenge/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: acme-challenge/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-panel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-panel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/test/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/test/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch7-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch7-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bucket-name/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bucket-name/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webroot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webroot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/backup/database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/backup/database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: proxy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: proxy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: products/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: products/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administration/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administration/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/json/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/json/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: customers/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: customers/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ruby/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ruby/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: push/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: push/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/old/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/old/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/.env.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/.env.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/new/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/new/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/share/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/share/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xx-final/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xx-final/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets/readme.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets/readme.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/backup/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/backup/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_email/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_email/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: "/config/secrets.yml", ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: "/config/secrets.yml", ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_nginx_static_path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_nginx_static_path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/env/wp-config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/env/wp-config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopify/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopify/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/wp-config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/wp-config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app-order-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app-order-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vars/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vars/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: products/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: products/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: leafer-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: leafer-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: clientes/laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: clientes/laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test/db.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test/db.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legacy/tests/9.2.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legacy/tests/9.2.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Travel_form/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Travel_form/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: members/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: members/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cache/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cache/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/data/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/data/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: films/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: films/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/*/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/*/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ewallets/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ewallets/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: squirrelmail/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: squirrelmail/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/backup/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/backup/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libraries/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libraries/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/data/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/data/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml.tmp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml.tmp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/code/community/Nosto/Tagging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/code/community/Nosto/Tagging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/backup/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/backup/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/backup/database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/backup/database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/js/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/js/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: windows/tests/9.3.x/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: windows/tests/9.3.x/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patchwork/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patchwork/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes/console/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes/console/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/compose/withMongo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/compose/withMongo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/old/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/old/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/cache/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/cache/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yml.tmp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yml.tmp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/empty-values/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/empty-values/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: linkerd/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: linkerd/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: unity/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: unity/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: includes/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: includes/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugins/.env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugins/.env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administration/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administration/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: audio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: audio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: unreal_project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: unreal_project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ansible/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ansible/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back-end/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back-end/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Lara/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Lara/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dataset2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dataset2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ��/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ��/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: :8081/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: :8081/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bookchain-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bookchain-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: BackEnd/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: BackEnd/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/secrets/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/secrets/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/private/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/private/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Exercise.Frontend/train/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Exercise.Frontend/train/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: square/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: square/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: club/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: club/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/backup/db.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/backup/db.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: projects/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: projects/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/json/db.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/json/db.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: linux/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: linux/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: handlers/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: handlers/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties.copy ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties.copy ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/sql/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/sql/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: basic-network/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: basic-network/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/test/wp-config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/test/wp-config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask_app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask_app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: paysafecard/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: paysafecard/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.development ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.development ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developerslv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developerslv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: "/.circleci/context/secrets.yml", ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: "/.circleci/context/secrets.yml", ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: $(pwd)/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: $(pwd)/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Helmetjs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Helmetjs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: python/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: python/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/new/database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/new/database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/db/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/db/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web3/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web3/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: freepbx/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: freepbx/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cpanel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cpanel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/sql/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/sql/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awstats/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awstats/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/old/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/old/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rEgIsTeR/.eNv ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rEgIsTeR/.eNv ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/backup/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/backup/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: restapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: restapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: angular/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: angular/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-network/addOrg3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-network/addOrg3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: verifone/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: verifone/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/old/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/old/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/public/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/public/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: :8000/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: :8000/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/vendor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/vendor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: react-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: react-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/lib/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/lib/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.development ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.development ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/override-value/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/override-value/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/examples/compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/examples/compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/public/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/public/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legacy/tests/9.1.1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legacy/tests/9.1.1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django_app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django_app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/keys/wp-config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/keys/wp-config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myproject/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myproject/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:57:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:57:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: newsletter/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: newsletter/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/credentials.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/credentials.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v11.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v11.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/plugin-qiankun/examples/app3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/plugin-qiankun/examples/app3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archiver/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archiver/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: views/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: views/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets/users.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets/users.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: khanlinks/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: khanlinks/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aWs/.EnV ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aWs/.EnV ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/backup/db.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/backup/db.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/json/wp-config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/json/wp-config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: unreal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: unreal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: react/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: react/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkout/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkout/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fhir-api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fhir-api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ios_app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ios_app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: members/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: members/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aDmIn/.EnV ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aDmIn/.EnV ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/api/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/api/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feature/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feature/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awsstats/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awsstats/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new-js/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new-js/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/old/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/old/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/new/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/new/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v13.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v13.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/momentum-fe/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/momentum-fe/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bucoffea/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bucoffea/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swarm/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swarm/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erp/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erp/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/add-auth/express/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/add-auth/express/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: opt/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: opt/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: edge-ai/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: edge-ai/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: playground/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: playground/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/data/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/data/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets/index.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets/index.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/test/db.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/test/db.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: target/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: target/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yml.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yml.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-gateway/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-gateway/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/fixtures/app_types/node/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/fixtures/app_types/node/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public-api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public-api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yml.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yml.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _wpeprivate/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _wpeprivate/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hgs-static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hgs-static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/env/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/env/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: proc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: proc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pos/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pos/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archive/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archive/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/test/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/test/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/secrets/database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/secrets/database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend-api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend-api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/data/db.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/data/db.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.sample ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.sample ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/php/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/php/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ContainerRegistry/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ContainerRegistry/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: billing/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: billing/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/.env.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/.env.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cache/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cache/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/src/persistence/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/src/persistence/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rabbitmq-cluster/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rabbitmq-cluster/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/php/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/php/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/vc-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/vc-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailgun/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailgun/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: function/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: function/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pRoD/.eNv ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pRoD/.eNv ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: escrow/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: escrow/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site_admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site_admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/public/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/public/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: biometrics/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: biometrics/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/backup/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/backup/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: klarna/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: klarna/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/lab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/lab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/static/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/static/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pt8/library-backend-gql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pt8/library-backend-gql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/json/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/json/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ClientApp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ClientApp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vm-docker-compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vm-docker-compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: control/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: control/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: brainwave/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: brainwave/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: remix-cloudflare-pages-demo-5co/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: remix-cloudflare-pages-demo-5co/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bgoldd/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bgoldd/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: higlass-website/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: higlass-website/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/secret/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/secret/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: memcached/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: memcached/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/archetype-resources/__rootArtifactId__-acceptance-test/src/test/resources/app-launcher-tile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/archetype-resources/__rootArtifactId__-acceptance-test/src/test/resources/app-launcher-tile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mesos/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mesos/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: protected/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: protected/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask_test_uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask_test_uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/documents/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/documents/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/sql/db.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/sql/db.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/old/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/old/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secure/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secure/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controller/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controller/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: FE/huey/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: FE/huey/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fraudlabspro/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fraudlabspro/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/payment_gateway/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/payment_gateway/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp-client/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp-client/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssl/private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssl/private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml.sample ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml.sample ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testfiles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testfiles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/old/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/old/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: monitoring/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: monitoring/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: clients/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: clients/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/sbin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/sbin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front-end/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front-end/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid/.env.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid/.env.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch6-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch6-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: register/.env.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: register/.env.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/wp-config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/wp-config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/private/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/private/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/agent-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/agent-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jobs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jobs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: preprod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: preprod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: unity_project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: unity_project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: FRONTEND/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: FRONTEND/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemaps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemaps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: coinpayments/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: coinpayments/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fonts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fonts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hidden/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hidden/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/backup/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/backup/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nextjs/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nextjs/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailinabox/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailinabox/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mEdIa/.EnV ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mEdIa/.EnV ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/test/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/test/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/test/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/test/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ikiwiki/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ikiwiki/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/secrets/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/secrets/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: post-deployment/.vscode/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: post-deployment/.vscode/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sbin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sbin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gripper/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gripper/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.example ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.example ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: srv/www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: srv/www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: collected_static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: collected_static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: strapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: strapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/new/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/new/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/videos/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/videos/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chat-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chat-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/src/main/resources/org/jobrunr/dashboard/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/src/main/resources/org/jobrunr/dashboard/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/backup/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/backup/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app1-static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app1-static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 09-managing-state/end/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 09-managing-state/end/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blogs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blogs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets/settings.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets/settings.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugin_static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugin_static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/*/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/*/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/bin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/bin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: httpdocs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: httpdocs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/backup/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/backup/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sEnDgRiD/.eNv ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sEnDgRiD/.eNv ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: minified/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: minified/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: clientes/laravel_inbox/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: clientes/laravel_inbox/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temanr9/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temanr9/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/sql/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/sql/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payment/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payment/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webroot_path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webroot_path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: whm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: whm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test/wp-config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test/wp-config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erp/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erp/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: restapps/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: restapps/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tipjar/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tipjar/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/wp-config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/wp-config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/old/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/old/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: preview-env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: preview-env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: acme/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: acme/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fulfillment/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fulfillment/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/en/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/en/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: custom_env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: custom_env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ��/public/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ��/public/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kodenames-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kodenames-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/adminer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/adminer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/postgres/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/postgres/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/assets/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/assets/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payment/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payment/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/old/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/old/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ext/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ext/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/static/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/static/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: finalVersion/lcomernbootcamp/projbackend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: finalVersion/lcomernbootcamp/projbackend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/keys/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/keys/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resource/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resource/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: misc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: misc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node-api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node-api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/s3/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/s3/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/backup/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/backup/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/core/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/core/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets/main.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets/main.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django_project_path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django_project_path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/03-one-to-many-relationship/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/03-one-to-many-relationship/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/01-simple-model/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/01-simple-model/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pRoJeCt/.EnV ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pRoJeCt/.EnV ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/data/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/data/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _asterisk/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _asterisk/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2024/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2024/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: moodledata/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: moodledata/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.env.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.env.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/backup/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/backup/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: custom/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: custom/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: game_engine/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: game_engine/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v7.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v7.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prestashop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prestashop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/plugin-qiankun/examples/app1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/plugin-qiankun/examples/app1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/front-end/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/front-end/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 07-accessing-data/begin/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 07-accessing-data/begin/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swarm/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swarm/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.example ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.example ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: windows/tests/9.2.x/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: windows/tests/9.2.x/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static_root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static_root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: digium_endpoints/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: digium_endpoints/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: counterblockd/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: counterblockd/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: risk/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: risk/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/tools/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/tools/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/db.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/db.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Final_Project/kafka_twitter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Final_Project/kafka_twitter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: magento/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: magento/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yml.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yml.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: websocket/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: websocket/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fRoNtEnD/.eNv ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fRoNtEnD/.eNv ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/old/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/old/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/app/public/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/app/public/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pt2/countries/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pt2/countries/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v12.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v12.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feature/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feature/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: function/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: function/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/10-subscriptions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/10-subscriptions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rest_phone/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rest_phone/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_lambda/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_lambda/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: buildkite/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: buildkite/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/symfony/**/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/symfony/**/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/env/database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/env/database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/08-performance/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/08-performance/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: counterwallet/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: counterwallet/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: game/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: game/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-gateway/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-gateway/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oldsanta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oldsanta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugins/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugins/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example27-how-to-load-env/sample02/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example27-how-to-load-env/sample02/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: errors/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: errors/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets/info.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets/info.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/simcore/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/simcore/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cardea/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cardea/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/assets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/assets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 07-accessing-data/end/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 07-accessing-data/end/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shibboleth/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shibboleth/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ��/web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ��/web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/secrets/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/secrets/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lemonldap-ng-fr-doc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lemonldap-ng-fr-doc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:58:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fixtures/fiber-debugger/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:58:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fixtures/fiber-debugger/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crowdstrike/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crowdstrike/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.yml~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.yml~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/test-become/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/test-become/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pubsub/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pubsub/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: @fs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: @fs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2023/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2023/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: react_app/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: react_app/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rEaCt/.EnV ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rEaCt/.EnV ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: model/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: model/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-gateway/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-gateway/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/mysql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/mysql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owncloud/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owncloud/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feature/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feature/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fixtures/kitchensink/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fixtures/kitchensink/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stackmon/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stackmon/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chat/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chat/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: script/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: script/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/stripe/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/stripe/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vault/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vault/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fix/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fix/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Library/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Library/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/old/db.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/old/db.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/static/database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/static/database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: next/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: next/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/monitoring/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/monitoring/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: react/.env.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: react/.env.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yml.swp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yml.swp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyRentals.Web/ClientApp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyRentals.Web/ClientApp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/test/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/test/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/public/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/public/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cronlab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cronlab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: workers/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: workers/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: challenge/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: challenge/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/tmp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/tmp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/laravel/cashier/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/laravel/cashier/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: munki_repo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: munki_repo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ADMIN/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ADMIN/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samples/chatroom/chatroom-spa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samples/chatroom/chatroom-spa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/new/wp-config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/new/wp-config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/private/wp-config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/private/wp-config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: react_app/.env.development ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: react_app/.env.development ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeweb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeweb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: .vscode/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: .vscode/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rasax/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rasax/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/old/database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/old/database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/jaeger/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/jaeger/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upfiles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upfiles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopware/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopware/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp-relay-provider/credentials.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp-relay-provider/credentials.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbadmin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbadmin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Nodejs-Projects/play-ground/ManageUserRoles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Nodejs-Projects/play-ground/ManageUserRoles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.yml.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.yml.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 08-routing/begin/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 08-routing/begin/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch8a-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch8a-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: enviroments/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: enviroments/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uat/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uat/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/old/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/old/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/core/tests/dotenv-files/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/core/tests/dotenv-files/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/.aws/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/.aws/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/fixtures/app_types/rails/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/fixtures/app_types/rails/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/drupal-separate-services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/drupal-separate-services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: release/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: release/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue-end/vue-til/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue-end/vue-til/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/filename/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/filename/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: horde/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: horde/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/private/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/private/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/test/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/test/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-node/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-node/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testwork_json/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testwork_json/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 3-sequelize/final/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 3-sequelize/final/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cache/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cache/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/php/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/php/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/lib/kubelet/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/lib/kubelet/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: giropay/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: giropay/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: thumbs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: thumbs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/11-transactions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/11-transactions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp-relay/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp-relay/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: orientdb-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: orientdb-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/keys/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/keys/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dEv/.EnV ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dEv/.EnV ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/backup/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/backup/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/test/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/test/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: preview/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: preview/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-gateway/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-gateway/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kibana/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kibana/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/all/libraries/mailchimp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/all/libraries/mailchimp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/persistence/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/persistence/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 15:59:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 15:59:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 17:10:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 17:10:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 17:16:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/luci was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 17:16:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/luci was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 17:17:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 17:17:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 17:30:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 17:30:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 17:53:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: promptfoo.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 17:53:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: promptfoo.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 18:58:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 18:58:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 19:08:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mcp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 19:08:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mcp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 19:08:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sse was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 19:08:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sse was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 19:08:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 19:08:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 19:11:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/gravitysmtp/v1/tests/mock-data was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 19:11:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/gravitysmtp/v1/tests/mock-data was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 20:14:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 20:14:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 20:31:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 20:31:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 20:40:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _next was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 20:40:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _next was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 20:40:15 --- ERROR: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH/classes/controller/api.php [ 50 ]
2026-05-06 20:40:15 --- STRACE: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH/classes/controller/api.php [ 50 ]
--
#0 /var/www/html/application/classes/controller/api.php(50): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 50, Array)
#1 [internal function]: Controller_Api->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Api))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-05-06 20:40:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _next/server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 20:40:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _next/server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 20:40:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL app was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 20:40:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL app was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 20:40:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/route was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-05-06 20:40:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/route was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 21:04:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/wfs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 21:04:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/wfs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 21:32:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 21:32:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 21:46:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 21:46:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 21:46:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL e9569ri35 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 21:46:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL e9569ri35 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 21:53:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: agent_trace.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 21:53:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: agent_trace.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 22:34:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-06 22:34:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-06 22:46:29 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-05-06 22:46:29 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-05-06 23:02:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autodiscover/autodiscover.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 23:02:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autodiscover/autodiscover.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 23:50:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 23:50:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 23:50:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 23:50:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 23:50:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 23:50:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 23:50:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 23:50:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 23:50:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 23:50:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 23:50:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 23:50:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 23:50:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 23:50:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 23:50:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 23:50:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 23:50:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 23:50:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 23:50:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 23:50:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 23:50:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 23:50:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 23:50:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 23:50:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 23:50:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 23:50:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 23:50:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 23:50:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 23:50:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 23:50:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 23:50:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 23:50:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 23:50:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 23:50:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 23:50:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 23:50:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 23:50:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 23:50:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 23:50:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 23:50:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 23:50:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 23:50:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 23:50:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 23:50:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 23:50:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 23:50:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 23:50:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 23:50:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 23:50:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 23:50:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 23:50:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 23:50:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 23:50:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 23:50:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 23:50:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 23:50:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 23:50:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 23:50:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 23:50:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 23:50:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 23:50:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 23:50:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-06 23:50:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-06 23:50:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}