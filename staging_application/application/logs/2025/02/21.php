<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2025-02-21 00:07:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL containers/json was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 00:07:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL containers/json was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 00:16:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 00:16:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 00:17:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vpnsvc/connect.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 00:17:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vpnsvc/connect.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 00:29:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v0/id was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-02-21 00:29:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v0/id was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 01:11:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 01:11:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 01:11:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 01:11:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 01:11:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 01:11:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 01:11:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 01:11:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 01:11:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 01:11:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 01:11:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 01:11:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 01:11:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 01:11:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 01:11:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 01:11:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 01:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 01:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 01:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 01:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 01:11:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 01:11:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 01:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 01:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 01:12:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 01:12:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 01:12:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 01:12:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 01:12:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 01:12:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 01:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 01:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 01:12:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 01:12:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 01:12:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 01:12:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 01:12:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 01:12:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 01:12:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 01:12:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 01:12:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 01:12:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 01:12:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 01:12:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 01:12:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 01:12:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 01:12:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 01:12:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 01:12:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 01:12:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 01:12:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 01:12:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 01:12:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 01:12:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 01:12:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 01:12:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 01:12:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 01:12:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 01:12:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 01:12:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 01:12:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 01:12:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 01:12:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 01:12:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 01:35:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 01:35:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 01:35:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL imagesLocal-abcefg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 01:35:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL imagesLocal-abcefg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 01:48:15 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-02-21 01:48:15 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-02-21 01:57:32 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-02-21 01:57:32 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-02-21 02:20:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 02:20:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 02:51:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 02:51:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 03:15:02 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-02-21 03:15:02 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-02-21 04:27:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: form.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 04:27:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: form.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 04:27:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 04:27:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 04:27:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 04:27:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 04:27:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 04:27:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 04:27:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 04:27:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 04:27:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 04:27:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 04:27:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: systembc/password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 04:27:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: systembc/password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 04:27:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 04:27:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 04:42:28 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-02-21 04:42:28 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-02-21 06:13:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpdesk/WebObjects/Helpdesk.woa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 06:13:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpdesk/WebObjects/Helpdesk.woa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 07:05:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 07:05:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 07:11:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 07:11:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 07:50:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ext-js/app/common/zld_product_spec.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 07:50:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ext-js/app/common/zld_product_spec.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 07:50:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/authLogin.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 07:50:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/authLogin.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 07:50:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL internal_forms_authentication was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 07:50:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL internal_forms_authentication was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 07:51:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL partymgr/control/main was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 07:51:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL partymgr/control/main was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 07:51:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cf_scripts/scripts/ajax/ckeditor/ckeditor.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 07:51:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cf_scripts/scripts/ajax/ckeditor/ckeditor.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 07:51:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 07:51:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 07:51:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Telerik.Web.UI.WebResource.axd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 07:51:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Telerik.Web.UI.WebResource.axd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 07:51:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/NewWindow_2_all.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 07:51:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/NewWindow_2_all.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 07:51:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webfig was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 07:51:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webfig was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 07:51:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.do ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 07:51:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.do ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 07:52:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/historypage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 07:52:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/historypage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 07:52:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sugar_version.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 07:52:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sugar_version.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 07:52:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL identity was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 07:52:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL identity was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 07:52:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aspera/faspex was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 07:52:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aspera/faspex was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 07:52:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solr was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 07:52:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solr was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 07:52:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL WebInterface was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 07:52:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL WebInterface was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 07:52:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 07:52:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 07:53:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/main.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 07:53:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/main.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 07:53:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owncloud/status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 07:53:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owncloud/status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 07:53:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 07:53:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 07:53:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: showLogin.cc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 07:53:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: showLogin.cc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 07:53:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: license.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 07:53:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: license.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 07:53:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-json was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 07:53:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-json was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 07:54:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 07:54:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 07:54:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 07:54:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 07:54:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/PTZOptics_powerby.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 07:54:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/PTZOptics_powerby.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 07:54:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon-32x32.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 07:54:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon-32x32.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 07:54:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/session/properties was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-02-21 07:54:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/session/properties was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 07:54:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitecore/shell/sitecore.version.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 07:54:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitecore/shell/sitecore.version.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 07:54:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zabbix/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 07:54:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zabbix/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 07:55:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: OA_HTML/AppsLocalLogin.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 07:55:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: OA_HTML/AppsLocalLogin.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 08:24:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 08:24:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 08:27:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global-protect/login.esp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 08:27:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global-protect/login.esp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 08:57:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 08:57:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 08:57:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 08:57:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 10:35:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL containers/json was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 10:35:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL containers/json was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 10:49:48 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-02-21 10:49:48 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-02-21 10:49:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL odinhttpcall1740124188 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 10:49:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 10:49:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL odinhttpcall1740124188 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 10:49:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 10:49:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL evox/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 10:49:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL evox/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 10:49:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 10:49:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 10:49:49 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-02-21 10:49:49 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-02-21 10:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 10:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:00:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 11:00:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 11:00:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 11:00:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 11:00:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 11:00:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 11:00:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 11:00:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 11:00:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:00:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:00:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:00:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:00:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: karma.conf.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:00:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: karma.conf.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:00:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: karma.conf.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:00:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: karma.conf.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:00:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:00:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:00:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:00:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:00:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:00:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:00:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:00:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:00:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:00:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:00:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:00:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:00:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:00:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:00:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:00:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:00:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:00:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:00:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:00:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:00:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:00:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:00:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:00:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:00:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:00:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:00:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:00:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:00:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:00:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:00:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:00:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:00:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: next/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:00:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: next/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:00:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: next/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:00:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: next/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:00:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nuxt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:00:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nuxt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:00:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nuxt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:00:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nuxt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:00:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: react/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:00:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: react/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:00:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: react/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:00:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: react/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:00:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:00:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:00:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:00:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:58:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:58:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:58:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:58:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:58:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:58:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:58:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:58:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:58:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:58:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:58:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:58:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:58:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:58:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:58:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:58:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:58:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:58:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:58:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:58:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:58:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:58:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:58:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:58:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:58:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:58:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:58:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:58:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:58:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:58:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:58:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:58:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:58:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:58:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:58:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:58:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:58:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:58:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:58:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:58:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:58:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:58:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:58:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:58:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:58:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:58:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:58:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:58:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:58:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:58:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 11:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 11:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 12:18:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 12:18:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 12:20:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 12:20:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:30:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 13:30:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 13:53:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:53:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:53:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/dbweb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:53:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/dbweb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:53:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:53:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:53:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sqladmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:53:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sqladmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:53:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:53:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:53:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:53:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:53:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-my-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:53:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-my-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:53:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin6/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:53:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin6/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:53:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:53:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:53:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sqlweb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:53:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sqlweb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:53:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/sysadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:53:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/sysadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:53:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:53:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:53:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/webadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:53:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/webadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:53:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/mysqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:53:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/mysqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:53:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:53:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:53:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:53:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:53:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin6/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:53:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin6/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:53:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:53:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:53:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:53:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:53:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest-english/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:53:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest-english/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:53:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:53:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:53:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:53:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:53:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpmyadmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:53:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpmyadmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:53:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:53:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:53:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:53:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:53:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:53:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:53:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:53:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:53:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:53:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:53:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:53:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:53:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin6.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:53:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin6.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:53:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:53:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:53:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:53:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:53:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:53:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:53:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:53:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:53:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:53:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:53:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:53:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:53:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:53:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:53:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:53:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:53:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:53:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:53:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:53:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:53:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.0-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:53:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.0-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:53:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:53:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:53:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:53:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:53:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:53:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:53:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/php-myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:53:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/php-myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:53:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:53:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:53:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:53:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:53:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:53:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/websql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/websql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.1-english/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.1-english/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpMyAdmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpMyAdmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/PMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/PMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4.9.10-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4.9.10-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/db-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/db-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2021/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2021/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/webadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/webadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/sqladmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/sqladmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2017/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2017/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: program/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: program/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/portable-phpmyadmin/wp-pma-mod/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/portable-phpmyadmin/wp-pma-mod/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phppma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phppma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2022/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2022/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2020/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2020/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/webdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/webdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/websql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/websql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/sqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/sqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2019/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2019/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqladmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqladmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4.9.7/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4.9.7/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2018/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2018/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.1-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.1-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sql-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sql-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 13:54:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/webdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 13:54:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/webdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 14:13:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 14:13:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 14:23:00 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-02-21 14:23:00 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-02-21 14:37:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 14:37:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 14:55:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 14:55:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 14:55:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 14:55:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 14:55:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 14:55:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 14:55:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/webdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 14:55:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/webdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 14:55:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 14:55:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 14:56:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 14:56:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 14:56:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 14:56:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 14:56:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 14:56:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 14:56:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 14:56:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 14:56:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 14:56:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 14:56:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 14:56:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 14:56:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 14:56:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 14:56:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 14:56:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 14:56:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 14:56:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 14:56:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 14:56:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 14:56:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqladmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 14:56:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqladmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 14:56:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 14:56:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 14:56:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 14:56:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 14:56:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 14:56:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 14:56:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 14:56:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 14:56:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 14:56:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 14:56:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 14:56:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 14:56:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 14:56:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 14:56:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 14:56:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 14:56:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 14:56:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 14:56:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 14:56:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 14:56:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 14:56:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 14:56:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.0-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 14:56:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.0-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 14:56:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 14:56:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 14:56:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 14:56:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 14:56:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2021/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 14:56:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2021/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 14:56:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 14:56:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 15:18:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 15:18:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 15:45:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL RDWeb/Pages was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 15:45:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL RDWeb/Pages was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 16:00:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 16:00:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 16:07:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 16:07:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 16:33:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 16:33:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 16:58:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 16:58:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 16:58:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 16:58:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 16:58:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 16:58:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 17:09:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 17:09:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 17:10:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 17:10:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 17:13:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 17:13:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 17:13:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 17:13:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 17:45:17 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-02-21 17:45:17 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-02-21 17:53:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 17:53:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 17:53:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 17:53:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 17:53:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 17:53:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 17:53:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 17:53:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 17:53:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 17:53:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 18:38:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL GponForm/diag_Form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 18:38:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL GponForm/diag_Form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 19:27:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 19:27:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 19:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 19:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 19:40:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL RDWeb/Pages was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 19:40:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL RDWeb/Pages was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 20:47:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ab2g was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 20:47:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ab2g was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 20:47:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ab2h was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 20:47:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ab2h was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 20:47:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alive.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:47:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alive.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:47:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 20:47:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 20:47:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:47:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:47:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL teorema505 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 20:47:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL teorema505 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 20:51:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin6.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin6.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phppma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phppma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/websql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/websql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/db-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/db-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2022/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2022/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest-english/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest-english/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/mysqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/mysqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/dbweb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/dbweb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/php-myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/php-myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin6/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin6/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2018/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2018/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2017/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2017/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/webadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/webadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2021/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2021/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: program/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: program/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4.9.7/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4.9.7/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/webdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/webdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sqlweb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sqlweb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sql-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sql-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/PMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/PMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.0-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.0-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/websql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/websql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4.9.10-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4.9.10-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpMyAdmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpMyAdmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/sqladmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/sqladmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-my-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-my-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin6/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin6/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqladmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqladmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2019/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2019/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpmyadmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpmyadmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/sqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/sqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:51:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:51:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:52:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:52:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:52:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:52:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:52:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:52:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:52:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:52:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:52:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:52:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:52:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.1-english/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:52:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.1-english/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:52:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:52:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:52:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/sysadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:52:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/sysadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:52:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:52:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:52:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:52:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:52:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sqladmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:52:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sqladmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:52:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/webdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:52:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/webdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:52:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:52:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:52:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2020/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:52:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2020/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:52:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:52:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:52:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:52:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:52:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.1-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:52:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.1-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:52:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:52:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:52:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:52:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:52:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:52:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:52:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:52:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:52:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:52:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:52:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:52:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:52:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:52:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:52:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:52:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:52:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:52:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:52:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:52:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:52:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/webadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:52:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/webadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:52:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/portable-phpmyadmin/wp-pma-mod/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:52:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/portable-phpmyadmin/wp-pma-mod/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:52:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:52:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 20:53:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 20:53:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:36:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 21:36:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 21:36:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:36:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:36:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:36:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:36:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:36:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:36:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:36:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:36:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:36:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:36:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dotenv.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:36:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dotenv.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:36:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 21:36:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 21:36:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:36:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:36:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:36:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:36:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:36:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.list ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.list ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 21:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 21:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:36:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:36:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:36:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL management/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 21:36:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL management/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 21:36:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myconf.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:36:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myconf.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:36:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:36:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:36:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:36:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twitter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twitter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web-variables.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web-variables.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:39:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/jetty-env.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:39:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/jetty-env.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:39:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuators/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 21:39:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuators/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 21:39:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:39:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:39:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/cassandra-env.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:39:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/cassandra-env.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:39:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.dev.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:39:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.dev.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:39:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.development.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:39:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.development.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:39:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.prod.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:39:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.prod.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:39:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.production.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:39:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.production.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:39:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:39:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:39:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.test.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:39:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.test.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 21:40:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 21:40:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuators/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 21:40:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuators/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 21:40:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/cassandra-env.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/cassandra-env.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 21:40:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 21:40:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.dev.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.dev.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.development.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.development.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.prod.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.prod.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.production.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.production.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.test.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.test.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 07-accessing-data/begin/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 07-accessing-data/begin/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 07-accessing-data/end/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 07-accessing-data/end/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 08-routing/begin/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 08-routing/begin/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 08-routing/end/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 08-routing/end/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 09-managing-state/begin/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 09-managing-state/begin/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 09-managing-state/end/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 09-managing-state/end/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 3-sequelize/final/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 3-sequelize/final/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 31_structure_tests/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 31_structure_tests/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Archipel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Archipel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Assignment3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Assignment3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Assignment4/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Assignment4/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Chai/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Chai/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ClientApp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ClientApp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CodeGolf.Web/ClientApp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CodeGolf.Web/ClientApp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ContainerRegistry/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ContainerRegistry/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Exercise.Frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Exercise.Frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Exercise.Frontend/train/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Exercise.Frontend/train/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: FE/huey/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: FE/huey/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: FIRST_CONFIG/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: FIRST_CONFIG/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Final_Project/Airflow_Dag/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Final_Project/Airflow_Dag/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Final_Project/StartingFile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Final_Project/StartingFile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Final_Project/kafka_twitter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Final_Project/kafka_twitter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: HUNIV_migration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: HUNIV_migration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Hash/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Hash/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Helmetjs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Helmetjs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Imagebord/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Imagebord/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: InstantCV/server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: InstantCV/server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Kubernetes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Kubernetes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Library/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Library/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Modix/ClientApp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Modix/ClientApp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyRentals.Web/ClientApp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyRentals.Web/ClientApp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Nodejs-Projects/play-ground/ManageUserRoles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Nodejs-Projects/play-ground/ManageUserRoles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Nodejs-Projects/play-ground/login/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Nodejs-Projects/play-ground/login/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Nuke.App.Ui/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Nuke.App.Ui/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Passportjs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Passportjs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Serve_time_server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Serve_time_server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Server_with_db/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Server_with_db/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Simple_server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Simple_server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Socketio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Socketio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Sources/API/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Sources/API/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: SpotiApps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: SpotiApps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Tests/Application/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Tests/Application/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Travel_form/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Travel_form/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: User_info/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: User_info/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Web/siteMariage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Web/siteMariage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __tests__/test-become/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __tests__/test-become/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: acme-challenge/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: acme-challenge/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: acme/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: acme/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: acme_challenges/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: acme_challenges/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: actions-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: actions-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: actuator/;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: actuator/;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: agora/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: agora/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alpha/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alpha/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: anaconda/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: anaconda/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app-order-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app-order-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/code/community/Nosto/Tagging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/code/community/Nosto/Tagging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/code/community/nosto/tagging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/code/community/nosto/tagging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app1-static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app1-static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app2-static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app2-static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dir/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dir/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_nginx_static_path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_nginx_static_path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:40:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archipel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:40:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archipel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset_img/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset_img/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assignment3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assignment3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assignment4/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assignment4/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: audio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: audio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awstats/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awstats/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/as-alias/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/as-alias/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/default/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/default/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/dev-env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/dev-env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/empty-values/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/empty-values/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/filename/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/filename/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/override-value/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/override-value/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/prod-env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/prod-env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back-end/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back-end/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backendfinaltest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backendfinaltest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base_dir/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base_dir/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: basic-network/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: basic-network/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bgoldd/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bgoldd/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bitcoind/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bitcoind/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blankon/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blankon/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blob/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blob/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blue/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blue/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bookchain-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bookchain-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boxes/oracle-vagrant-boxes/ContainerRegistry/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boxes/oracle-vagrant-boxes/ContainerRegistry/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boxes/oracle-vagrant-boxes/Kubernetes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boxes/oracle-vagrant-boxes/Kubernetes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boxes/oracle-vagrant-boxes/OLCNE/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boxes/oracle-vagrant-boxes/OLCNE/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boxes/oracle-vagrant-boxes/containerregistry/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boxes/oracle-vagrant-boxes/containerregistry/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boxes/oracle-vagrant-boxes/kubernetes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boxes/oracle-vagrant-boxes/kubernetes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boxes/oracle-vagrant-boxes/olcne/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boxes/oracle-vagrant-boxes/olcne/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bucoffea/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bucoffea/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cardea/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cardea/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdw-backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdw-backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch2-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch2-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch6-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch6-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infra/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infra/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/content/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/content/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch6a-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch6a-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/temp/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/temp/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_area/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_area/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch7-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch7-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch7a-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch7a-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch8-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch8-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch8a-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch8a-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch8b-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch8b-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chai/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chai/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: challenge/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: challenge/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: challenges/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: challenges/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: charts/liveObjects/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: charts/liveObjects/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: charts/liveobjects/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: charts/liveobjects/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:41:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chat-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:41:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chat-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:42:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chiminey/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:42:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chiminey/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:42:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/mutual-fund-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:42:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/mutual-fund-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:42:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:42:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:42:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: clientapp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:42:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: clientapp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:42:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: clld_dir/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:42:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: clld_dir/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:42:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cmd/testdata/expected/dot_env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:42:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cmd/testdata/expected/dot_env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:42:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:42:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:42:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:42:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:42:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: codegolf.web/clientapp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:42:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: codegolf.web/clientapp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:42:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: codenames-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:42:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: codenames-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:42:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: collab-connect-web-application/server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:42:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: collab-connect-web-application/server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:42:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: collected_static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:42:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: collected_static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:42:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: community/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:42:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: community/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:42:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:42:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:42:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:42:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:42:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: containerregistry/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:42:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: containerregistry/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:42:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:42:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:42:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/Datavase/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:42:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/Datavase/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:42:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:42:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:42:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/datavase/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:42:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/datavase/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:42:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/persistence/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:42:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/persistence/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:42:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/src/main/resources/org/jobrunr/dashboard/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:42:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/src/main/resources/org/jobrunr/dashboard/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:42:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: counterblockd/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:42:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: counterblockd/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:42:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: counterwallet/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:42:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: counterwallet/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:42:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:42:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cronlab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cronlab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cryo_project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cryo_project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: custom/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: custom/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: d/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: d/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dataset1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dataset1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dataset2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dataset2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: defaults.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: defaults.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: delivery/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: delivery/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developerslv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developerslv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: directories/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: directories/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django-blog/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django-blog/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django_project_path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django_project_path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: doc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: doc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose/platform/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose/platform/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-elk/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-elk/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-network-healthcheck/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-network-healthcheck/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-node-mongo-redis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-node-mongo-redis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/compose/withMongo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/compose/withMongo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/compose/withPostgres/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/compose/withPostgres/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/compose/withmongo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/compose/withmongo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/compose/withpostgres/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/compose/withpostgres/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/db/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/db/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/examples/compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/examples/compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/postgres/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/postgres/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/webdav/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/webdav/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dodoswap-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dodoswap-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dotfiles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dotfiles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: downloads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: downloads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: e2e/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: e2e/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: engine/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: engine/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env-config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env-config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.heroku_api_key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.heroku_api_key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/dockers/mariadb-test/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/dockers/mariadb-test/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/dockers/php-apache/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/dockers/php-apache/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/example/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/example/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/template/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/template/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: error/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: error/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: errors/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: errors/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example02-golang-package/import-underscore/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example02-golang-package/import-underscore/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example27-how-to-load-env/sample01/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example27-how-to-load-env/sample01/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example27-how-to-load-env/sample02/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example27-how-to-load-env/sample02/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/01-simple-model/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/01-simple-model/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/02-complex-example/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/02-complex-example/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/03-one-to-many-relationship/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/03-one-to-many-relationship/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/04-many-to-many-relationship/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/04-many-to-many-relationship/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/05-migrations/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/05-migrations/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/06-base-service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/06-base-service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/07-feature-flags/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/07-feature-flags/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/08-performance/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/08-performance/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/09-production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/09-production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/10-subscriptions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/10-subscriptions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/11-transactions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/11-transactions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/drupal-separate-services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/drupal-separate-services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/react-dashboard/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/react-dashboard/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/sdl-first/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/sdl-first/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/sdl-first/prisma/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/sdl-first/prisma/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/vue-dashboard/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/vue-dashboard/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:43:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:43:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-cookie-auth-fauna/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-cookie-auth-fauna/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-dotenv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-dotenv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-firebase-authentication-serverless/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-firebase-authentication-serverless/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-react-relay-network-modern/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-react-relay-network-modern/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-relay-modern/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-relay-modern/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-universal-configuration-build-time/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-universal-configuration-build-time/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: exapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: exapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: exercise.frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: exercise.frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: exercise.frontend/train/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: exercise.frontend/train/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: export/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: export/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fastlane/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fastlane/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicons/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicons/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fe/huey/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fe/huey/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fedex/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fedex/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fhir-api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fhir-api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fileserver/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fileserver/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: films/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: films/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: finalVersion/lcomernbootcamp/projbackend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: finalVersion/lcomernbootcamp/projbackend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: final_project/airflow_dag/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: final_project/airflow_dag/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: final_project/kafka_twitter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: final_project/kafka_twitter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: final_project/startingfile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: final_project/startingfile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: finalversion/lcomernbootcamp/projbackend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: finalversion/lcomernbootcamp/projbackend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: first-network/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: first-network/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: first_config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: first_config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fisdom/fisdom/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fisdom/fisdom/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fixtures/blocks/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fixtures/blocks/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fixtures/fiber-debugger/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fixtures/fiber-debugger/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fixtures/flight/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fixtures/flight/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fixtures/kitchensink/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fixtures/kitchensink/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask_test_uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask_test_uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: font-icons/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: font-icons/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fonts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fonts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front-empathy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front-empathy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front-end/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front-end/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/momentum-fe/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/momentum-fe/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/react/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/react/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/vue/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/vue/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontendfinaltest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontendfinaltest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftpmaster/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftpmaster/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: github-connect/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: github-connect/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grems-api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grems-api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grems-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grems-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hadoop-env.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hadoop-env.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hash/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hash/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hasura/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hasura/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helmetjs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helmetjs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hgs-static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hgs-static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:44:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: higlass-website/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:44:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: higlass-website/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: horde/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: horde/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotpot-app-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotpot-app-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: http/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: http/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: httpboot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: httpboot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: huniv_migration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: huniv_migration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icon/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icon/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ikiwiki/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ikiwiki/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image_data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image_data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: imagebord/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: imagebord/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: instantcv/server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: instantcv/server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: items/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: items/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js-plugin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js-plugin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jsrelay/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jsrelay/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jupyter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jupyter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: khanlinks/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: khanlinks/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kibana/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kibana/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kodenames-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kodenames-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kolab-syncroton/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kolab-syncroton/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: latest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: latest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: layout/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: layout/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lcomernbootcamp/projbackend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lcomernbootcamp/projbackend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: leafer-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: leafer-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ledger_sync/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ledger_sync/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lemonldap-ng-doc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lemonldap-ng-doc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lemonldap-ng-fr-doc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lemonldap-ng-fr-doc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: letsencrypt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: letsencrypt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: library/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: library/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: linux/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: linux/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailinabox/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailinabox/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailman/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailman/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main_user/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main_user/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manual/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manual/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: master/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: master/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: memcached/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: memcached/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mentorg-lava-docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mentorg-lava-docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: micro-app-react-communication/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: micro-app-react-communication/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: micro-app-react/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: micro-app-react/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mindsweeper/gui/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mindsweeper/gui/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: minified/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: minified/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: misc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: misc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modix/clientapp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modix/clientapp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: monerod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: monerod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongodb/config/dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongodb/config/dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: monitoring/compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: monitoring/compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: moodledata/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: moodledata/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: msks/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: msks/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: munki_repo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: munki_repo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: music/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: music/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myrentals.web/clientapp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myrentals.web/clientapp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: name/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: name/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new-js/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new-js/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: niffler-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: niffler-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: noVNC/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: noVNC/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodejs-projects/play-ground/login/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodejs-projects/play-ground/login/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodejs-projects/play-ground/manageuserroles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodejs-projects/play-ground/manageuserroles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: novnc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: novnc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nuke.app.ui/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nuke.app.ui/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oldsanta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oldsanta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ops/vagrant/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ops/vagrant/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: option/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: option/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:45:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: orientdb-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:45:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: orientdb-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: outputs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: outputs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owncloud/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owncloud/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/plugin-analytics/src/fixtures/analytics-ga-key/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/plugin-analytics/src/fixtures/analytics-ga-key/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/plugin-qiankun/examples/app1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/plugin-qiankun/examples/app1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/plugin-qiankun/examples/app2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/plugin-qiankun/examples/app2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/plugin-qiankun/examples/app3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/plugin-qiankun/examples/app3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/plugin-qiankun/examples/master/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/plugin-qiankun/examples/master/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/react-scripts/fixtures/kitchensink/template/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/react-scripts/fixtures/kitchensink/template/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/styled-ui-docs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/styled-ui-docs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packed/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packed/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: page-editor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: page-editor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: parity/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: parity/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passportjs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passportjs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patchwork/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patchwork/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pfbe/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pfbe/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pictures/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pictures/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: playground/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: playground/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugin_static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugin_static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: post-deployment/.vscode/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: post-deployment/.vscode/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postfixadmin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postfixadmin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: price_hawk_client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: price_hawk_client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prisma/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prisma/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: processor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: processor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: projbackend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: projbackend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project_root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project_root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: psnlink/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: psnlink/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pt2/countries/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pt2/countries/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pt8/library-backend-gql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pt8/library-backend-gql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pub/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pub/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: question2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: question2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qv-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qv-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rabbitmq-cluster/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rabbitmq-cluster/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rails-api/react-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rails-api/react-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rasax/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rasax/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: react_todo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: react_todo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redmine/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redmine/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repos/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repos/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repository/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repository/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/mysql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/mysql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/phpmyadmin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/phpmyadmin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/rabbitmq/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/rabbitmq/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/rediscommander/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/rediscommander/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resourcesync/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resourcesync/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: restapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: restapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: results/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: results/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rosterBack/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rosterBack/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rosterback/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rosterback/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: roundcube/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: roundcube/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: roundcubemail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: roundcubemail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: run/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: run/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rust-backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rust-backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rust-backend/dao/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rust-backend/dao/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s-with-me-front/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s-with-me-front/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: saas/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: saas/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samples/chatroom/chatroom-spa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samples/chatroom/chatroom-spa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samples/docker/deploymentscripts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samples/docker/deploymentscripts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: script/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: script/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/fvt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/fvt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selfish-darling-backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selfish-darling-backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serve-browserbench/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serve-browserbench/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serve_time_server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serve_time_server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/src/persistence/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/src/persistence/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server_with_db/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server_with_db/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/adminer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/adminer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/deployment-agent/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/deployment-agent/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/documents/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/documents/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/graylog/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/graylog/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/jaeger/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/jaeger/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/minio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/minio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/monitoring/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/monitoring/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/portainer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/portainer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/redis-commander/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/redis-commander/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/registry/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/registry/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/simcore/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/simcore/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/traefik/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/traefik/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sessions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sessions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shibboleth/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shibboleth/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: simple_server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: simple_server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site-library/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site-library/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemaps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemaps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitestatic/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitestatic/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: socketio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: socketio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sources/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sources/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sources/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sources/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spearmint/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spearmint/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spikes/config-material-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spikes/config-material-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spotiapps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spotiapps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/__tests__/__fixtures__/instanceWithDependentSteps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/__tests__/__fixtures__/instanceWithDependentSteps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/__tests__/__fixtures__/instancewithdependentsteps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/__tests__/__fixtures__/instancewithdependentsteps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/__tests__/__fixtures__/typeScriptIntegrationProject/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/__tests__/__fixtures__/typeScriptIntegrationProject/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/__tests__/__fixtures__/typeScriptProject/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/__tests__/__fixtures__/typeScriptProject/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/__tests__/__fixtures__/typeScriptVisualizeProject/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/__tests__/__fixtures__/typeScriptVisualizeProject/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/__tests__/__fixtures__/typescriptintegrationproject/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/__tests__/__fixtures__/typescriptintegrationproject/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/__tests__/__fixtures__/typescriptproject/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/__tests__/__fixtures__/typescriptproject/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/__tests__/__fixtures__/typescriptvisualizeproject/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/__tests__/__fixtures__/typescriptvisualizeproject/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/add-auth/express/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/add-auth/express/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/assembly/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/assembly/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/character-service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/character-service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/client/mobile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/client/mobile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/core/tests/dotenv-files/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/core/tests/dotenv-files/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/gameprovider-service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/gameprovider-service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/front-end/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/front-end/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/archetype-resources/__rootArtifactId__-acceptance-test/src/test/resources/app-launcher-tile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/archetype-resources/__rootArtifactId__-acceptance-test/src/test/resources/app-launcher-tile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/archetype-resources/__rootartifactid__-acceptance-test/src/test/resources/app-launcher-tile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/archetype-resources/__rootartifactid__-acceptance-test/src/test/resources/app-launcher-tile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/renderer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/renderer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:46:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: srv6_controller/controller/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:46:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: srv6_controller/controller/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: srv6_controller/examples/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: srv6_controller/examples/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: srv6_controller/node-manager/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: srv6_controller/node-manager/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: st-js-be-2020-movies-two/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: st-js-be-2020-movies-two/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stackato-pkg/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stackato-pkg/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static-collected/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static-collected/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static-html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static-html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static-root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static-root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static_prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static_prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static_root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static_root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static_user/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static_user/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staticfiles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staticfiles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stats/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stats/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: style/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: style/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: styles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: styles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stylesheets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stylesheets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: target/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: target/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temanr10/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temanr10/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temanr9/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temanr9/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-network/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-network/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-network/addOrg3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-network/addOrg3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-network/addorg3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-network/addorg3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/aries-js-worker/fixtures/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/aries-js-worker/fixtures/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/adapter-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/adapter-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/agent-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/agent-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/couchdb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/couchdb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/demo/openapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/demo/openapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/did-method-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/did-method-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/did-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/did-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/edv-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/edv-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/openapi-demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/openapi-demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/sidetree-mock/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/sidetree-mock/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/universalresolver/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/universalresolver/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/vc-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/vc-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/fixtures/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/fixtures/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/fixtures/app_types/node/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/fixtures/app_types/node/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/fixtures/app_types/rails/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/fixtures/app_types/rails/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/fixtures/node_path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/fixtures/node_path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/integration/env-config/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/integration/env-config/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testfiles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testfiles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/Integration/Environment/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/Integration/Environment/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/application/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/application/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v10.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v10.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v11.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v11.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v12.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v12.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v13.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v13.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v7.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v7.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v8.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v8.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v9.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v9.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/drupal-test/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/drupal-test/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/integration/environment/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/integration/environment/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/todo-react/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/todo-react/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testwork_json/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testwork_json/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: theme/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: theme/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: theme_static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: theme_static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: thumb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: thumb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: thumbs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: thumbs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tiedostot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tiedostot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: travel_form/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: travel_form/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:47:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ts/prime/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:47:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ts/prime/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:48:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ubuntu/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:48:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ubuntu/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:48:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ui/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:48:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ui/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:48:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: unixtime/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:48:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: unixtime/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:48:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: unsplash-downloader/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:48:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: unsplash-downloader/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:48:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upfiles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:48:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upfiles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:48:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:48:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:48:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:48:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:48:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: urlmem-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:48:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: urlmem-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:48:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_info/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:48:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_info/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:48:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:48:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:48:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:48:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:48:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:48:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:48:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:48:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:48:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/github.com/gobuffalo/envy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:48:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/github.com/gobuffalo/envy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:48:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/github.com/subosito/gotenv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:48:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/github.com/subosito/gotenv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:48:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: videos/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:48:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: videos/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:48:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vm-docker-compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:48:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vm-docker-compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vod_installer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vod_installer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:48:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue-end/vue-til/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:48:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue-end/vue-til/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:48:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue/vuecli/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:48:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue/vuecli/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:48:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue_CRM/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:48:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue_CRM/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:48:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue_crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:48:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue_crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:48:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web-dist/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:48:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web-dist/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:48:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web-inf/jetty-env.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:48:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web-inf/jetty-env.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:48:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:48:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/sitemariage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/sitemariage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/var/www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/var/www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:48:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webroot_path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:48:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webroot_path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:48:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: websocket/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:48:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: websocket/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:48:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webstatic/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:48:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webstatic/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:48:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webui/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:48:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webui/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:48:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: well-known/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:48:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: well-known/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:48:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: whturk/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:48:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: whturk/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:48:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: windows/tests/9.2.x/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:48:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: windows/tests/9.2.x/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:48:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: windows/tests/9.3.x/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:48:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: windows/tests/9.3.x/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:48:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:48:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:48:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www-data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:48:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www-data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:48:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xx-final/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:48:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xx-final/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:48:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zmusic-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:48:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zmusic-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:48:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:48:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:48:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:48:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:49:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:49:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:49:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:49:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:49:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:49:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:49:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:49:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:49:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:49:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:49:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:49:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:49:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:49:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:49:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:49:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:49:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:49:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:49:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:49:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:49:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: panel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:49:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: panel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:49:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:49:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:49:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:49:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:49:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:49:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:49:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:49:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:49:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: protected/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:49:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: protected/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:49:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/all/libraries/mailchimp/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:49:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/all/libraries/mailchimp/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:49:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:49:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:49:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:49:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:49:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:49:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:49:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:49:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:49:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/cloudflare/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:49:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/cloudflare/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:49:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/dzs-videogallery/class_parts/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:49:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/dzs-videogallery/class_parts/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:49:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/jekyll-exporter/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:49:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/jekyll-exporter/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:49:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/mm-plugin/inc/vendors/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:49:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/mm-plugin/inc/vendors/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:49:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:49:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:49:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:49:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:49:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asdf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:49:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asdf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:49:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/iinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:49:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/iinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:50:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:50:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:50:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 21:50:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 21:50:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:50:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:50:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:50:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:50:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: help/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:50:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: help/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:50:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:50:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:50:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:50:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:50:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:50:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:50:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:50:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:50:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:50:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:50:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: linusadmin-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:50:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: linusadmin-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:50:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infophp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:50:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infophp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:50:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:50:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:50:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:50:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:50:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:50:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:50:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:50:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:50:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:50:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:50:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webroot/index.php/_environment ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:50:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webroot/index.php/_environment ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:50:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:50:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:50:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:50:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:50:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:50:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:50:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpversion.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:50:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpversion.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:50:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: time.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:50:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: time.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:50:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:50:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:50:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 21:50:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 21:50:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: help/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:50:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: help/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:50:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:50:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:50:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:50:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:51:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:51:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:51:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:51:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:51:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:51:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:51:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:51:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:51:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:51:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:51:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:51:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:51:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:51:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:51:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:51:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:51:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:51:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:51:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:51:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:51:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:51:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:51:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:51:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:51:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:51:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:51:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:51:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:51:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:51:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:51:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:51:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:51:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:51:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:51:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:51:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:51:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:51:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:51:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:51:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:51:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: panel/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:51:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: panel/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:51:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cpanel/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:51:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cpanel/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:51:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:51:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:51:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:51:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:51:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:51:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manual/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manual/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manual/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manual/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: x.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: x.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: z.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: z.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xx.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xx.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xyz.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xyz.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: forum/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: forum/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:52:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:52:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:53:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blogs/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:53:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blogs/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:53:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:53:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:53:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:53:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:53:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: es/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:53:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: es/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:53:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: de/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:53:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: de/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:53:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:53:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:53:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: check.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:53:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: check.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:53:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:53:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:53:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:53:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:53:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samples/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:53:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samples/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:53:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sample/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:53:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sample/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:53:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:53:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:53:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:53:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:53:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:53:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:53:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:53:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:53:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:53:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:53:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:53:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:53:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:53:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:53:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:53:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:53:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:53:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:53:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:53:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:53:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: includes/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:53:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: includes/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:53:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: include/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:53:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: include/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:53:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:53:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:53:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:53:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:53:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:53:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:53:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:53:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:53:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:53:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:53:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:53:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:53:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:53:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:53:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:53:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:53:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: file/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:53:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: file/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:53:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:53:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:53:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: doc/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:53:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: doc/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:53:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: documentation/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:53:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: documentation/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:53:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/themes/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:53:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/themes/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:53:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:53:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:54:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:54:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:54:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: customer/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:54:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: customer/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:54:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: customers/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:54:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: customers/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:54:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: member/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:54:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: member/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:54:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/components/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:54:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/components/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:54:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:54:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:54:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:54:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:54:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:54:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:54:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:54:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:54:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:54:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:54:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:54:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:54:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: control/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:54:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: control/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:54:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controller/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:54:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controller/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:54:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:54:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:54:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:54:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:54:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: library/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:54:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: library/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:54:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libraries/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:54:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libraries/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:54:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:54:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:54:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendors/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:54:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendors/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:54:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:54:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:54:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v2/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:54:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v2/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:54:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:54:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:54:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:54:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:54:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:54:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:54:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:54:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:54:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.bak.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:54:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.bak.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:54:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.bak.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:54:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.bak.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:54:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-cgi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:54:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-cgi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:54:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:54:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:54:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: showinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:54:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: showinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:54:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sysinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:54:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sysinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:54:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:54:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:54:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:54:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:54:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:54:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:54:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:54:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:54:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stat.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:54:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stat.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:54:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stats.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:54:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stats.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:54:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: version.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:54:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: version.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:54:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: healthcheck.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:54:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: healthcheck.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:55:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: health.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:55:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: health.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:55:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.html.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:55:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.html.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:55:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info-dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:55:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info-dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:55:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info-prod.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:55:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info-prod.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:55:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info-test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:55:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info-test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:55:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo-test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:55:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo-test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:55:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo-dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:55:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo-dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:55:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpconfig.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:55:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpconfig.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:55:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:55:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:55:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config-php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:55:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config-php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:55:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:55:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:55:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: runtime.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:55:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: runtime.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:55:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: run.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:55:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: run.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:55:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:55:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:55:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:55:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:55:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:55:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:55:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 21:55:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 21:55:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:55:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:55:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:55:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:55:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:55:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:55:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: framework/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:55:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: framework/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:55:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frameworks/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:55:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frameworks/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:55:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:55:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:55:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: drupal/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:55:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: drupal/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:55:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: joomla/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:55:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: joomla/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:55:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: magento/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:55:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: magento/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:56:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prestashop/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:56:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prestashop/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:56:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: typo3/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:56:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: typo3/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:56:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: craft/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:56:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: craft/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:56:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:56:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:56:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: codeigniter/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:56:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: codeigniter/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:56:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:56:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:56:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cake/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:56:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cake/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:56:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:56:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:56:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oscommerce/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:56:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oscommerce/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:56:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: woocommerce/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:56:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: woocommerce/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:56:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:56:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:56:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: store/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:56:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: store/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:56:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cart/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:56:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cart/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:56:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mall/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:56:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mall/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:56:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:56:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:56:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:56:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:56:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mariadb/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:56:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mariadb/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:56:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postgres/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:56:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postgres/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:56:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongodb/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:56:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongodb/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:56:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redis/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:56:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redis/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:56:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: memcached/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:56:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: memcached/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:56:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:56:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:56:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apache/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:56:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apache/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:56:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apache2/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:56:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apache2/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:56:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: httpd/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:56:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: httpd/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:56:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:56:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:56:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodejs/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:56:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodejs/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:56:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ruby/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:56:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ruby/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:56:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rails/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:56:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rails/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:56:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:56:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:56:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:56:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:56:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: python/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:56:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: python/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:56:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _db/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:56:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _db/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:57:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _beta/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:57:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _beta/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:57:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:57:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:57:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alpha/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:57:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alpha/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:57:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: preview/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:57:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: preview/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:57:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sandbox/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:57:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sandbox/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:57:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: maintenance/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:57:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: maintenance/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:57:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:57:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:57:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:57:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:57:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:57:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:57:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _old/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:57:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _old/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:57:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _new/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:57:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _new/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:57:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webadmin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:57:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webadmin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:57:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manage/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:57:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manage/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:57:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: management/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:57:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: management/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:57:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administration/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:57:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administration/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:57:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manager/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:57:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manager/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:57:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:57:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:57:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myadmin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:57:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myadmin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:57:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wamp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:57:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wamp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:57:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:57:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:57:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:57:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:57:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legacy/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:57:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legacy/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:57:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:57:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:57:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:57:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:57:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:57:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:57:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2020/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:57:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2020/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:57:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2021/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:57:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2021/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:57:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2022/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:57:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2022/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:57:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2023/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:57:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2023/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2024/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2024/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:57:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/maint/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:57:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/maint/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:57:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:57:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:57:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:57:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:57:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:57:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:57:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:57:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:57:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: installer/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:57:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: installer/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:57:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: updates/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:57:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: updates/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 21:58:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upgrade/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 21:58:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upgrade/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 22:04:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 22:04:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 22:07:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 22:07:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 22:14:31 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-02-21 22:14:31 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-02-21 22:14:31 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-02-21 22:14:31 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-02-21 22:14:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 22:14:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 22:14:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL odinhttpcall1740165271 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 22:14:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL odinhttpcall1740165271 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 22:14:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 22:14:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 22:14:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL evox/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 22:14:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL evox/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 22:14:32 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-02-21 22:14:32 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-02-21 22:14:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 22:14:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 22:14:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/authLogin.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 22:14:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/authLogin.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 22:14:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 22:14:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 22:14:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin/info/system was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 22:14:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin/info/system was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 22:14:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin/cores was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 22:14:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin/cores was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 22:14:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 22:14:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 22:20:36 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-02-21 22:20:36 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-02-21 22:36:35 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-02-21 22:36:35 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-02-21 23:12:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/controller.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:12:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/controller.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:12:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/template.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:12:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/template.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:13:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/helper/aws_s3.jsjs/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:13:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/helper/aws_s3.jsjs/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:13:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:13:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:13:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/mail.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:13:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/mail.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:13:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:13:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:13:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/controller.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:13:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/controller.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:13:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/utils.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:13:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/utils.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:13:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/helper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:13:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/helper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:13:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailserver.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:13:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailserver.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:13:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:13:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:13:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:13:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:13:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/envConfig.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:13:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/envConfig.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:13:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:13:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:13:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/controller.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:13:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/controller.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:13:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/mailer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:13:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/mailer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:13:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/mail.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:13:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/mail.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:13:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/utils.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:13:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/utils.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:13:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:13:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:13:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:13:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:13:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:13:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:13:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:13:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:14:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/mail.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:14:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/mail.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:14:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/utils.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:14:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/utils.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:14:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/utils.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:14:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/utils.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:14:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:14:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:14:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/mailserver.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:14:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/mailserver.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:14:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:14:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:14:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:14:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:14:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:14:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:14:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:14:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:14:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:14:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:14:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/controller.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:14:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/controller.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:14:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:14:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:14:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:14:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:14:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/mailserver.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:14:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/mailserver.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:14:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:14:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:14:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:14:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:14:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config/database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:14:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config/database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:14:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/template.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:14:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/template.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:14:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:14:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:14:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailserver.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:14:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailserver.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:14:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:14:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:14:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/mail.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:14:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/mail.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:14:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:14:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:14:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/controller.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:14:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/controller.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:14:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:14:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:14:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/mail.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:14:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/mail.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:14:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/mailserver.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:14:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/mailserver.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:14:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:14:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:14:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:14:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:14:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:14:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:14:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/mail.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:14:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/mail.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:14:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/mailserver.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:14:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/mailserver.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:14:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config/database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:14:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config/database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:14:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:14:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:14:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:14:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:14:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/utils.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:14:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/utils.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:14:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:14:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:14:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:14:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:14:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:14:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:14:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:14:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:15:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/controller.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:15:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/controller.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:15:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:15:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:15:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:15:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:15:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:15:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:15:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:15:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:15:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:15:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:15:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/src.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:15:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/src.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:15:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/utils.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:15:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/utils.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:15:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:15:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:15:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/template.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:15:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/template.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:15:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/controller.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:15:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/controller.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:15:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/config/database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:15:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/config/database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:15:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:15:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:15:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:15:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:15:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:15:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:15:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:15:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:15:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/utils.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:15:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/utils.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:15:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/utils.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:15:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/utils.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:15:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/mail.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:15:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/mail.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:15:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config/template.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:15:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config/template.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:15:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/template.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:15:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/template.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:15:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/helper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:15:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/helper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:15:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:15:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:15:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/helper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:15:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/helper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:15:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/mailer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:15:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/mailer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:15:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/helper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:15:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/helper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:15:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:15:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:15:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/controller.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:15:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/controller.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:16:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:16:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:16:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:16:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:16:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:16:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:16:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:16:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:16:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/helper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:16:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/helper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:16:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/config/template.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:16:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/config/template.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:16:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:16:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:16:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/mailserver.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:16:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/mailserver.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:16:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/mailer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:16:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/mailer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:16:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:16:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:16:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:16:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:16:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:16:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:16:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:16:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:16:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:16:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:16:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:16:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:16:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:16:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:16:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:16:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:16:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:16:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:16:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:16:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:16:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:16:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:16:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/mailer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:16:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/mailer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:16:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/helper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:16:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/helper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:16:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:16:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:16:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controller.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:16:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controller.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:16:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:16:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/mailer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/mailer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:16:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/mailserver.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:16:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/mailserver.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:16:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/mailer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:16:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/mailer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:16:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:16:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:16:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/template.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:16:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/template.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:16:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:16:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:16:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:16:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:16:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:16:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:17:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:17:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:17:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/helper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:17:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/helper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:17:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/web.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:17:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/web.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:17:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/mailer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:17:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/mailer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:17:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:17:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:17:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:17:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:17:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:17:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:17:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:17:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:17:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:17:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:17:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:17:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:18:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials.yml.enc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:18:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials.yml.enc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:18:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/master.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:18:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/master.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:18:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:18:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:18:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/storage.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:18:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/storage.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:18:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/aws.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:18:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/aws.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:18:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/carrierwave.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:18:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/carrierwave.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:18:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/fog.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:18:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/fog.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:18:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/shrine.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:18:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/shrine.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:18:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/paperclip.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:18:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/paperclip.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:18:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/s3.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:18:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/s3.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:18:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/production.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:18:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/production.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:18:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/staging.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:18:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/staging.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:18:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/development.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:18:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/development.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:18:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/s3.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:18:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/s3.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:18:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws-sdk.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:18:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws-sdk.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:18:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/aws_config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:18:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/aws_config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:18:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/aws_credentials.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:18:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/aws_credentials.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:18:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/tasks/aws.rake ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:18:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/tasks/aws.rake ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:18:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/tasks/s3.rake ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:18:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/tasks/s3.rake ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:18:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/s3_uploader.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:18:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/s3_uploader.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:18:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/aws_service.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:18:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/aws_service.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:18:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/services/aws_service.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:18:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/services/aws_service.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:18:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/services/s3_service.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:18:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/services/s3_service.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:18:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/models/concerns/aws_credentials.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:18:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/models/concerns/aws_credentials.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:18:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/uploaders/file_uploader.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:18:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/uploaders/file_uploader.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:18:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/uploaders/image_uploader.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:18:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/uploaders/image_uploader.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:18:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/aws_config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:18:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/aws_config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:18:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Gemfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 23:18:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Gemfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 23:18:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Gemfile.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:18:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Gemfile.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:18:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials/aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:18:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials/aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:18:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials/cloud.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:18:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials/cloud.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:18:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/s3_backup.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:18:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/s3_backup.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:18:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:18:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:19:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/base.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:19:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/base.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:19:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/production.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:19:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/production.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:19:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/development.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:19:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/development.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:19:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/staging.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:19:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/staging.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:19:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/local.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:19:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/local.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:19:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/aws.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:19:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/aws.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:19:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/s3.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:19:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/s3.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:19:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/storage.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:19:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/storage.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:19:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/secrets.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:19:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/secrets.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:19:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/credentials.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:19:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/credentials.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:19:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:19:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:19:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/base.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:19:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/base.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:19:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/production.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:19:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/production.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:19:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/development.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:19:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/development.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:19:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/staging.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:19:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/staging.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:19:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/aws.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:19:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/aws.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:19:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:19:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:19:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/settings/base.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:19:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/settings/base.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:19:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:19:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:19:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/settings/base.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:19:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/settings/base.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:19:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/settings/production.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:19:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/settings/production.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:19:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:19:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:19:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/settings/base.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:19:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/settings/base.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:19:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:19:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:19:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/aws.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:19:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/aws.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:19:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/s3.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:19:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/s3.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:19:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:19:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:19:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/django.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:19:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/django.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:19:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils/aws.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:19:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils/aws.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:19:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils/s3.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:19:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils/s3.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:19:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils/storage.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:19:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils/storage.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:20:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/aws.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:20:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/aws.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:20:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/s3.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:20:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/s3.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:20:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/s3.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:20:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/s3.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:20:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpers/aws.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:20:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpers/aws.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:20:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpers/s3.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:20:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpers/s3.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:20:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/core/storage.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:20:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/core/storage.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:20:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/media/storage.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:20:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/media/storage.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:20:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: requirements.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:20:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: requirements.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:20:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: requirements/base.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:20:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: requirements/base.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:20:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: requirements/production.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:20:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: requirements/production.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:20:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:20:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:20:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/aws.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:20:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/aws.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:20:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:20:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:20:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manage.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:20:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manage.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:20:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wsgi.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:20:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wsgi.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:20:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asgi.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:20:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asgi.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:20:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Dockerfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-21 23:20:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Dockerfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 23:21:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:21:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:21:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jsconfig.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:21:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jsconfig.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:21:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console/base/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:21:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console/base/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:21:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.json/env.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:21:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.json/env.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:21:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:21:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:21:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:21:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:21:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:21:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:21:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:21:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:21:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console/payments/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:21:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console/payments/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:21:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tsconfig.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:21:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tsconfig.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:21:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vite.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:21:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vite.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:21:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:21:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:21:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/default.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:21:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/default.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:21:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environment.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:21:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environment.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:21:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.guess ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:21:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.guess ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:21:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:21:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:21:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:21:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:21:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:21:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:21:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configure.php.orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:21:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configure.php.orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:21:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:21:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:22:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.inc.php.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:22:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.inc.php.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:22:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:22:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:22:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:22:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:22:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:22:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:22:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.local.php_old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:22:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.local.php_old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:22:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:22:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:22:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php-dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:22:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php-dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:22:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.inc.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:22:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.inc.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:22:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/application.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:22:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/application.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:22:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.dat ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:22:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.dat ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:22:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:22:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:22:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:22:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:22:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cache.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:22:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cache.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:22:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.swp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:22:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.swp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:22:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.inc.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:22:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.inc.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:22:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:22:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:22:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:22:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:22:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:22:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:22:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:22:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:22:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:22:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:22:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:22:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:22:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:22:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:22:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awsconfig.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:22:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awsconfig.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:23:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/index.php/v1/config/application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:23:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/index.php/v1/config/application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:23:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:23:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:23:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:23:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:23:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sftp-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:23:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sftp-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:23:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:23:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:23:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:23:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:23:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.ini.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:23:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.ini.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:23:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin/config.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:23:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin/config.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:23:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php.swp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:23:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php.swp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:23:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.source ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:23:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.source ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:23:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.codekit3 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:23:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.codekit3 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:23:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:23:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:23:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:23:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:23:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:23:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:23:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:23:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:23:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.local.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:23:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.local.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:23:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.sub ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:23:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.sub ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:23:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.core ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:23:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.core ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:23:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php.new ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:23:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php.new ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:23:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:23:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:23:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:23:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:23:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php-eb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:23:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php-eb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:23:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configure.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:23:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configure.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:24:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php.original ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:24:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php.original ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:24:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:24:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:24:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/AppData.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:24:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/AppData.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:24:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:24:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:24:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:24:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:24:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awsconfig.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:24:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awsconfig.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:24:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.prod.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:24:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.prod.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:24:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:24:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:24:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.codekit ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:24:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.codekit ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:24:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ru ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:24:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ru ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:24:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:24:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:24:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:24:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:24:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:24:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:24:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:24:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:24:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:24:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:24:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: AwsConfig.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:24:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: AwsConfig.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:24:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:24:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:24:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:24:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:24:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:24:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:24:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssh-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:24:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssh-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:24:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:24:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:24:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-02-21 23:24:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 23:24:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:24:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:24:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/dashboard/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:24:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/dashboard/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:24:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:24:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:25:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:25:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:25:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/admin/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-02-21 23:25:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/admin/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 23:25:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminphp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:25:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminphp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:25:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/admin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:25:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/admin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:25:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/infophp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:25:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/infophp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:25:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:25:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:25:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:25:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:25:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:25:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:25:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:25:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:25:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:25:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:25:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-credentials.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:25:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-credentials.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:25:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:25:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:25:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:25:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:25:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/root/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:25:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/root/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:25:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sevice/dockerService.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:25:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sevice/dockerService.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:25:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:25:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:25:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build_docker.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:25:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build_docker.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:25:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:25:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-21 23:30:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/tags was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-02-21 23:30:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/tags was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-21 23:31:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-21 23:31:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}