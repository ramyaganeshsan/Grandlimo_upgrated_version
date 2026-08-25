<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2025-02-23 01:20:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 01:20:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 01:20:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/resources/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 01:20:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/resources/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 01:20:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/processing/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 01:20:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/processing/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 01:20:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/private/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 01:20:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/private/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 01:20:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: integration/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 01:20:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: integration/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 01:20:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/current/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 01:20:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/current/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 01:20:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 01:20:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 01:20:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 01:20:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 01:20:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 01:20:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 01:31:01 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-02-23 01:31:01 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-02-23 02:16:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ab2g was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-23 02:16:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ab2g was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-23 02:16:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ab2h was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-23 02:16:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ab2h was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-23 02:16:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alive.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 02:16:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alive.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 02:16:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-23 02:16:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-23 02:16:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 02:16:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 02:16:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL teorema505 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-23 02:16:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL teorema505 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-23 02:19:04 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-02-23 02:19:04 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-02-23 02:45:01 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-02-23 02:45:01 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-02-23 03:07:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 03:07:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 03:14:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-23 03:14:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-23 03:16:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 03:16:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 03:28:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 03:28:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 03:28:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 03:28:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 03:41:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 03:41:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 03:49:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-23 03:49:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-23 03:53:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 03:53:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 04:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 04:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 04:53:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 04:53:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 04:53:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 04:53:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 04:53:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 04:53:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 04:53:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 04:53:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 04:53:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 04:53:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 04:53:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 04:53:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 04:53:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 04:53:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 04:53:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 04:53:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 04:53:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 04:53:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 04:53:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 04:53:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 04:53:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 04:53:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 04:53:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 04:53:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 04:53:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 04:53:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 04:53:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 04:53:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 04:53:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 04:53:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 04:53:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 04:53:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 04:53:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 04:53:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 04:53:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 04:53:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 04:53:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 04:53:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 04:53:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 04:53:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 04:53:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 04:53:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 04:53:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 04:53:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 04:53:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 04:53:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 04:53:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 04:53:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 04:53:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 04:53:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 04:53:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 04:53:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 04:53:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 04:53:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 04:53:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 04:53:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 04:53:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 04:53:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 04:53:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 04:53:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 04:53:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 04:53:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 05:14:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passengers/how_it_works.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 05:14:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passengers/how_it_works.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 06:38:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 06:38:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 06:38:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 06:38:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 06:41:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sra_{BA195980-CD49-458b-9E23-C84EE0ADCD75} was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-23 06:41:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sra_{BA195980-CD49-458b-9E23-C84EE0ADCD75} was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-23 07:04:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-23 07:04:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-23 07:19:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: RDWeb/Pages/en-US/login.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 07:19:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: RDWeb/Pages/en-US/login.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 07:20:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 07:20:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 07:23:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 07:23:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 07:23:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 07:23:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 07:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 07:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 08:03:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: druid/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 08:03:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: druid/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 08:12:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-23 08:12:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-23 08:12:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL containers/json was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-23 08:12:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL containers/json was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-23 08:18:01 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-02-23 08:18:01 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-02-23 08:59:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-23 08:59:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-23 09:24:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 09:24:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 09:25:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-23 09:25:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-23 09:39:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 09:39:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 09:44:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-23 09:44:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-23 10:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 10:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 10:13:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-23 10:13:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-23 10:20:15 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-02-23 10:20:15 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-02-23 10:52:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 10:52:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 10:52:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 10:52:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 10:52:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 10:52:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 10:52:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 10:52:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 11:10:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 11:10:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 11:10:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 11:10:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 11:29:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autodiscover/autodiscover.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 11:29:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autodiscover/autodiscover.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 11:30:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 11:30:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 11:31:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 11:31:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 13:26:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 13:26:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 13:26:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 13:26:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 13:48:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 13:48:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 14:11:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: form.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 14:11:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: form.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 14:11:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 14:11:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 14:11:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-23 14:11:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-23 14:11:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-23 14:11:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-23 14:11:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 14:11:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 14:11:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 14:11:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 14:11:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: systembc/password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 14:11:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: systembc/password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 14:11:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 14:11:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 15:46:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-23 15:46:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-23 16:00:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wsman was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-23 16:00:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wsman was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-23 16:10:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: À ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:10:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: À ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:10:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:10:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:10:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL RDWeb/Pages was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-23 16:10:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL RDWeb/Pages was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-23 16:10:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-23 16:10:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-23 16:10:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:10:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:10:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:10:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:10:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:10:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:10:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.development ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:10:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.development ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:10:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:10:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:10:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.example ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:10:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.example ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:10:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.sample ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:10:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.sample ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:10:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.template ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:10:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.template ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:10:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:10:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:10:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:10:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:10:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:10:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:10:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:10:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:10:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:10:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:10:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:10:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:10:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legacy-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:10:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legacy-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:10:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legacy-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:10:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legacy-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:10:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legacy-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:10:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legacy-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:10:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legacy-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:10:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legacy-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:10:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:10:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:10:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:10:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:10:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:10:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:10:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:10:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:10:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:10:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:10:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:10:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:10:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:10:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:11:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: experimental/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:11:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: experimental/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:11:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: experimental-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:11:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: experimental-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:11:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: experimental-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:11:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: experimental-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:11:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: experimental-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:11:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: experimental-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:11:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: experimental-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:11:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: experimental-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:11:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: research/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:11:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: research/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:11:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: research-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:11:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: research-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:11:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sandbox/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:11:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sandbox/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:11:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sandbox-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:11:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sandbox-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:11:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sandbox-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:11:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sandbox-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sandbox-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sandbox-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:11:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prototype-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:11:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prototype-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:11:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prototype-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:11:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prototype-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:11:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prototype-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:11:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prototype-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:11:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prototype-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:11:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prototype-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:11:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:11:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:11:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:11:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:11:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:11:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:11:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:11:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:11:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:11:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:11:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:11:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:11:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:11:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:11:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:11:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:11:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:11:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:11:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:11:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:11:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:11:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:11:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:11:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:12:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:12:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:12:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:12:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:12:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:12:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:12:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:12:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:12:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth1.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:12:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth1.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:12:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:12:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:12:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sslvpnLogin.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:12:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sslvpnLogin.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:12:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/sonicos/tfa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-02-23 16:12:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/sonicos/tfa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-23 16:12:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/sonicos/auth was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-02-23 16:12:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/sonicos/auth was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-23 16:12:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:12:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:12:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app-beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:12:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app-beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:12:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private-beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:12:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private-beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:12:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public-beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:12:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public-beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:12:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: module-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:12:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: module-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:12:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: module-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:12:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: module-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:12:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: component/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:12:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: component/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:12:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: component-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:12:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: component-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:12:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:12:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:12:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: component-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:12:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: component-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:12:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugin-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:12:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugin-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:12:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugin-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:12:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugin-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:13:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugin-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:13:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugin-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:13:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: extension/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:13:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: extension/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:13:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: extension-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:13:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: extension-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:13:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: extension-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:13:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: extension-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:13:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: extension-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:13:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: extension-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:13:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: microservice/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:13:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: microservice/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:13:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: microservice-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:13:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: microservice-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:13:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: microservice-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:13:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: microservice-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:13:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: microservice-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:13:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: microservice-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:13:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: microservice-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:13:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: microservice-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:13:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:13:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:13:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:13:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:13:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:13:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:13:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:13:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:13:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:13:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:13:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gateway/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:13:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gateway/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:13:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gateway-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:13:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gateway-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:13:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gateway-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:13:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gateway-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:13:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: proxy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:13:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: proxy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:13:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: proxy-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:13:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: proxy-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:13:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: proxy-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:13:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: proxy-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:13:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: proxy-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:13:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: proxy-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:13:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: proxy-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:13:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: proxy-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:13:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-23 16:13:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-23 16:13:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: load-balancer-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:13:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: load-balancer-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:13:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: load-balancer-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:13:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: load-balancer-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:13:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: load-balancer-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:13:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: load-balancer-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:13:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: load-balancer-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:13:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: load-balancer-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:13:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: worker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:13:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: worker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:13:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: worker-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:13:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: worker-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:13:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: worker-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:13:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: worker-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:13:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: task/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:13:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: task/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:13:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: task-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:13:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: task-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:13:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: task-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:13:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: task-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:13:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: task-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:13:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: task-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:14:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: job-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:14:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: job-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:14:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: job-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:14:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: job-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:14:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: job-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:14:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: job-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:14:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: job-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:14:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: job-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:14:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: queue/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:14:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: queue/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:14:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: queue-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:14:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: queue-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:14:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: queue-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:14:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: queue-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:14:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: queue-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:14:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: queue-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:14:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: queue-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:14:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: queue-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:14:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stream/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:14:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stream/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:14:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stream-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:14:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stream-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:14:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stream-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:14:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stream-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:14:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stream-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:14:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stream-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:14:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cache/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:14:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cache/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:14:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cache-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:14:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cache-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:14:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cache-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:14:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cache-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:14:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cache-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:14:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cache-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:14:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: session/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:14:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: session/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:14:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: session-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:14:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: session-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:14:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: session-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:14:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: session-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:14:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: session-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:14:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: session-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:14:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:14:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:14:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:14:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:14:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:14:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:14:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:14:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:14:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:14:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:14:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:14:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:14:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:14:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:14:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:14:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:14:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:14:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:14:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: identity/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:14:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: identity/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:14:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: identity-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:14:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: identity-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:14:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: identity-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:14:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: identity-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:14:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: identity-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:14:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: identity-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:14:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: network/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:14:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: network/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:14:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: network-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:14:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: network-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:14:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: network-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:14:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: network-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:14:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: network-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:14:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: network-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:14:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: network-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:14:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: network-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:14:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:14:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:14:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:14:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:14:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:14:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:14:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:14:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:15:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:15:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:15:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:15:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:15:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:15:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:15:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdn/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:15:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdn/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:15:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdn-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:15:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdn-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:15:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdn-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:15:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdn-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:15:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdn-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:15:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdn-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:15:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mirror/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:15:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mirror/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:15:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mirror-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:15:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mirror-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:15:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mirror-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:15:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mirror-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:15:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:15:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:15:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: distributed/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:15:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: distributed/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:15:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: distributed-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:15:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: distributed-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:15:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: distributed-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:15:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: distributed-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:15:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: distributed-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:15:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: distributed-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:15:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: distributed-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:15:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: distributed-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:15:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cluster/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:15:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cluster/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:15:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cluster-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:15:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cluster-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:15:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cluster-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:15:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cluster-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:15:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cluster-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:15:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cluster-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:15:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cluster-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:15:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cluster-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:15:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:15:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:15:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:15:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:15:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:15:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:15:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:15:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:15:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:15:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:15:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: edge/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:15:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: edge/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:15:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: edge-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:15:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: edge-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:15:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: edge-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:15:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: edge-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:15:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: edge-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:15:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: edge-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:15:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: region/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:15:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: region/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:15:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: region-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:15:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: region-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:15:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: region-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:15:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: region-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:15:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: region-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:15:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: region-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:15:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: region-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:15:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: region-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:15:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zone/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:15:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zone/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:15:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:15:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:15:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:15:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:16:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:16:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:16:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:16:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:16:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:16:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:16:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:16:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:16:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:16:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:16:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environment.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:16:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environment.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:16:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environment.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:16:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environment.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:16:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:16:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:16:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environment.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:16:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environment.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:16:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environment.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:16:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environment.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:16:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environment.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:16:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environment.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:16:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environment.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:16:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environment.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:16:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:16:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:16:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:16:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:16:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:16:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:16:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:16:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:16:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:16:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:16:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:16:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:16:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:16:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:16:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/environment.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:16:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/environment.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:16:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/environment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:16:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/environment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:16:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/environment.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:16:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/environment.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:16:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/environment.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:16:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/environment.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:16:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/environment.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:16:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/environment.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:17:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/env.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:17:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/env.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:17:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/env.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:17:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/env.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:17:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/env.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:17:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/env.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:17:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/environment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:17:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/environment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:17:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/environment.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:17:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/environment.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:17:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/environment.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:17:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/environment.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:17:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:17:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:17:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/env.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:17:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/env.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:17:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/env.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:17:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/env.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:17:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/env.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:17:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/env.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:17:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/env.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:17:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/env.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:17:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/env.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:17:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/env.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:17:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/environment.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:17:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/environment.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:17:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/environment.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:17:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/environment.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:17:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/environment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:17:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/environment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:17:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/environment.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:17:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/environment.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:17:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/environment.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:17:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/environment.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:17:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/environment.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:17:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/environment.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:17:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:17:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:17:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/env.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:17:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/env.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:17:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/env.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:17:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/env.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:17:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/env.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:17:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/env.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:17:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/env.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:17:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/env.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:17:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/env.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:17:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/env.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:17:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/environment.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:17:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/environment.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:17:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/environment.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:17:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/environment.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:17:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/environment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:17:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/environment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:17:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/environment.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:17:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/environment.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:17:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/environment.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:17:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/environment.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:17:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/environment.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:17:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/environment.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:17:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:17:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:17:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/env.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:17:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/env.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:17:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/env.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:17:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/env.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:17:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/env.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:17:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/env.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/env.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/env.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/env.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/env.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/env.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/env.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/environment.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/environment.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/environment.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/environment.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/environment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/environment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/environment.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/environment.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/environment.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/environment.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/environment.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/environment.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/env.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/env.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/env.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/env.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/env.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/env.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/env.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/env.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/env.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/env.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/env.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/env.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/environment.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/environment.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/environment.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/environment.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/environment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/environment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/environment.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/environment.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/environment.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/environment.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/environment.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/environment.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/env.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/env.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/env.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/env.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/env.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/env.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/env.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/env.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/env.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/env.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/env.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/env.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zone-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zone-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zone-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zone-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zone-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zone-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zone-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zone-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: httpdocs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: httpdocs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:18:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:18:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:19:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:19:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:19:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:19:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:19:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:19:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:19:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:19:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:19:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:19:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:19:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:19:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:19:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:19:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:19:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:19:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:19:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: platform/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:19:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: platform/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:19:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:19:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:19:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:19:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:19:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:19:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:19:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:19:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:19:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:19:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:19:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:19:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:19:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:19:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:19:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:19:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:19:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: master/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:19:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: master/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:19:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:19:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:19:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:19:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:19:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:19:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:19:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:19:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:19:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:19:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:19:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:19:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:19:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:19:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:19:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:19:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:19:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: external/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:19:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: external/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:19:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: opt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:19:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: opt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:19:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:19:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:19:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:19:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:19:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: workspace/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:19:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: workspace/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:19:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:19:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:19:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:19:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:19:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:19:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:19:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 5/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:19:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 5/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:19:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:19:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:19:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: b/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:19:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: b/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:19:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: c/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:19:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: c/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:19:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:19:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:19:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:19:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:19:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:19:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:19:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:19:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:19:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:19:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:19:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:19:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:19:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archive/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:19:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archive/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:19:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:19:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:19:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:19:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:20:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:20:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:20:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 4/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:20:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 4/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:20:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:20:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:20:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:20:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:20:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:20:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:20:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app-src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:20:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app-src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:20:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web-src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:20:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web-src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:20:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev-src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:20:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev-src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:20:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod-src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:20:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod-src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:20:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:20:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:20:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:20:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:20:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:20:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:20:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:20:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:20:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:20:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:20:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:20:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:20:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:20:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:20:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:20:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:20:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:20:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:20:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:20:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:20:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:20:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:20:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:20:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:20:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:20:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:20:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:20:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:20:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev-shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:20:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev-shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:20:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod-shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:20:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod-shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:20:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web-shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:20:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web-shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:21:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:21:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:21:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:21:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:21:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app-system/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:21:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app-system/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:21:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web-system/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:21:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web-system/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:21:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-system/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:21:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-system/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:21:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod-system/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:21:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod-system/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:21:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app-core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:21:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app-core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:21:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web-core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:21:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web-core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:21:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:21:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:21:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev-core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:21:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev-core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:21:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod-core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:21:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod-core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:21:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:21:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:21:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:21:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:21:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app-shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:21:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app-shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:21:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:21:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:21:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:21:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:21:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:21:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:21:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app-internal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:21:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app-internal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:21:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-internal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:21:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-internal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:21:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod-internal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:21:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev-internal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:21:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod-internal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:21:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev-internal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app-external/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app-external/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:21:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web-external/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:21:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web-external/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:21:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-external/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:21:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-external/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:21:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev-external/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:21:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev-external/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:21:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod-external/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:21:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod-external/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:21:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:21:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:21:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:21:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:22:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: panel-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:22:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: panel-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:22:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:22:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:22:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:22:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:22:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:22:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:22:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: panel-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:22:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: panel-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:22:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:22:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:22:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:22:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:22:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:22:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:22:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:22:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:22:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: primary/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:22:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: primary/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:22:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secondary/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:22:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secondary/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:22:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tertiary/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:22:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tertiary/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:22:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:22:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:22:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:22:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:22:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:22:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:22:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:22:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:22:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:22:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:22:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:22:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:22:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: A/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:22:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: A/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:22:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: B/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:22:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: C/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:22:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: B/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:22:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: C/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:22:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: X/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:22:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: X/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:22:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Y/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:22:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Y/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:22:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Z/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:22:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Z/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:22:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alpha/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:22:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alpha/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:22:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gamma/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:22:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gamma/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:22:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: delta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:22:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: delta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:22:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:22:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:22:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:22:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:22:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: version1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:22:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: version1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:22:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: version3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:22:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: version3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:23:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secondary-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:23:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secondary-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:23:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tertiary-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:23:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tertiary-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:23:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:23:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:23:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:23:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:23:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:23:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:23:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:23:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:23:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:23:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:23:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:23:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:23:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:23:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:23:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:23:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:23:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:23:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:23:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global-web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:23:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global-web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:23:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: international-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:23:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: international-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:23:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: international-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:23:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: international-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:23:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: international-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:23:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: international-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:23:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: international-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:23:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: international-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:23:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: international-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:23:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: international-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:23:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: international-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:23:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: international-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:23:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: international-web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:23:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: international-web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:23:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:23:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:23:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:23:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:23:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:23:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:23:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:23:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:23:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:23:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:23:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud-web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:23:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud-web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:23:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: multi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:23:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: multi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:23:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: multi-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:23:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: multi-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:23:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: multi-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:23:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: multi-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:23:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: multi-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:23:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: multi-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:23:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: multi-web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:23:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: multi-web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:23:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: central/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:23:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: central/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:23:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: central-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:23:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: central-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:23:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: central-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:23:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: central-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:23:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: central-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:23:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: central-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:23:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: central-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:23:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: central-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:23:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: central-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:23:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: central-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:23:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: central-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:23:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: central-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:23:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: central-web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:23:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: central-web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:23:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: master-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:23:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: master-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:23:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: master-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:23:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: master-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:23:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: master-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:23:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: master-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:24:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: master-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:24:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: master-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:24:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: runtime/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:24:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: runtime/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:24:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: runtime-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:24:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: runtime-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:24:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: runtime-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:24:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: runtime-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:24:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: runtime-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:24:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: runtime-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:24:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: runtime-web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:24:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: runtime-web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:24:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:24:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:24:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:24:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:24:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:24:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:24:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:24:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:24:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:24:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:24:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:24:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:24:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live-web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:24:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live-web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:24:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: primary-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:24:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: primary-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:24:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: primary-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:24:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: primary-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:24:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: primary-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:24:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: primary-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:24:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: primary-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:24:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: primary-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:24:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: primary-web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:24:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: primary-web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:24:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secondary-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:24:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secondary-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:24:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secondary-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:24:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secondary-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:24:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secondary-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:24:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secondary-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:24:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secondary-web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:24:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secondary-web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:24:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: extra/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:24:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: extra/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:24:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: extra-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:24:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: extra-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:24:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: extra-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:24:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: extra-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:24:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: extra-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:24:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: extra-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:24:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: extra-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:24:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: extra-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:24:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: extra-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:24:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: extra-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:24:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: extra-web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:24:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: extra-web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:25:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:25:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:25:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:25:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils-dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:25:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:25:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils-prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:25:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:25:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils-staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:25:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:25:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:25:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:25:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:25:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils-web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:25:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils-web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:25:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:25:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:25:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:25:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:25:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:25:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:25:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:25:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:25:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:25:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:25:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:25:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:25:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:25:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:25:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:25:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:25:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:25:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:25:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:25:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:25:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:25:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:25:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:25:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:25:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:25:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:25:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:25:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:25:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:25:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:25:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:25:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:25:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:25:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:25:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:25:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:25:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:25:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:25:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:25:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:25:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:25:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:25:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:25:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:25:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:25:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:25:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:25:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:25:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:25:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:25:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:25:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:25:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/env.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:25:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/env.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/env.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/env.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.1env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.1env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.1env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.1env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:26:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.1env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:26:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.1env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:26:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.1env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:26:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.1env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:26:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.1env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:26:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.1env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:26:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.1env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:26:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.1env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:26:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/env.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:26:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/env.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:26:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/env.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:26:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/env.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:26:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/env.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:26:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/env.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:26:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/env.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:26:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/env.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:26:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/env.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:26:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/env.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:26:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.0 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:26:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.0 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:26:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/env.0 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:26:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/env.0 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:26:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/env.0 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:26:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/env.0 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:26:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/env.0 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:26:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/env.0 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:26:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/env.0 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:26:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/env.0 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:26:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/env.0 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:26:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/env.0 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:26:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/env.0 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:26:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/env.0 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:26:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.3 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:26:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.3 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:26:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.original ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:26:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.original ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:26:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:26:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:26:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.stg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:26:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.stg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:26:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.backup1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:26:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.backup1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:26:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.backup2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:26:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.backup2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:26:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.save.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:26:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.save.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:26:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.save.2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:26:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.save.2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:26:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.template1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:26:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.template1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:26:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.template2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:26:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.template2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:26:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.secret ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:26:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.secret ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:26:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:26:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:26:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.keys ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:26:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.keys ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:26:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.web ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:26:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.web ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:26:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.server ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:26:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.server ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:26:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.client ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:26:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.client ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:26:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.django ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:26:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.django ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.flask ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.flask ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.rails ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.rails ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:26:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.spring ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:26:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.spring ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:26:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.node ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:26:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.node ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:27:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.4 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:27:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.4 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:28:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.6 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:28:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.7 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:28:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.6 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:28:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.7 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:28:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.8 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:28:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.8 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:28:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.01 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:28:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.01 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:28:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.02 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:28:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.02 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:28:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.9 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:28:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.9 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:28:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.03 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:28:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.03 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:28:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.04 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:28:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.04 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:28:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.05 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:28:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.05 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:28:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.11 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:28:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.11 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:28:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.12 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:28:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.12 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:28:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.15 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:28:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.15 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:28:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.20 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:28:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.20 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:28:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.21 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:28:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.21 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:28:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.22 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:28:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.22 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:28:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.23 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:28:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.23 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:28:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.24 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:28:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.24 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:28:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.25 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:28:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.25 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:28:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.draft ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:28:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.draft ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:28:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-23 16:28:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-23 16:28:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _env.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:28:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _env.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:28:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _env.2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:28:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _env.2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:28:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _env.3 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:28:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _env.3 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:28:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _env.4 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:28:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _env.4 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:28:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _env.5 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:28:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _env.5 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:28:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _env.6 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:28:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _env.6 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:28:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _env.7 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:28:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _env.7 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:28:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _env.8 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:28:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _env.8 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:28:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _env.9 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:28:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _env.9 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:28:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _env.0 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:28:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _env.0 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:28:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.local_ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:28:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.local_ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:28:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.dev_ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:28:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.dev_ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:28:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.prod_ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:28:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.prod_ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:29:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.dev.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:29:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.dev.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:29:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.prod.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:29:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.prod.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:29:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.temp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:29:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.temp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:29:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.tmp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:29:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.tmp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:29:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:29:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:29:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: save.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:29:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: save.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:29:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.14 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:29:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.14 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:29:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:29:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:29:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.database ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:29:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.database ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:29:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.ci ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:29:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.ci ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:29:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.auth ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:29:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.auth ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:29:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.sec ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:29:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.sec ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:29:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env~ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-23 16:29:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env~ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-23 16:29:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.core ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:29:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.core ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:29:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.main ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:29:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.main ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:29:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.global ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:29:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.global ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:29:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.common ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:29:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.common ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:29:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.vue ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:29:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.vue ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:29:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.angular ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:29:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.angular ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:29:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.cloud ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:29:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.cloud ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:29:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.azure ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:29:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.azure ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.aws ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.aws ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.gcp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.gcp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.heroku ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.heroku ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.digitalocean ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.digitalocean ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.netlify ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.netlify ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.vercel ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.vercel ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.mysql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.mysql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:29:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.postgres ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:29:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.postgres ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:29:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.mongodb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:29:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.mongodb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:29:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.redis ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:29:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.redis ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:29:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.cd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:29:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.cd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:30:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:30:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:30:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.gitlab ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:30:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.gitlab ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:30:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: devenv.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:30:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: devenv.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:30:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.jenkins ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:30:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.jenkins ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:30:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.travis ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:30:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.travis ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:30:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.circleci ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:30:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.circleci ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:30:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.oauth ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:30:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.oauth ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:30:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.jwt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:30:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.jwt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:30:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.security ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:30:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.security ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:30:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.vpn ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:30:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.vpn ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:30:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:30:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:30:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:30:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:30:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:30:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:30:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:30:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:30:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:30:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:30:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:30:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:30:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:30:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:30:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:30:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:30:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:30:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:30:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:30:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:30:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:30:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:30:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:30:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:30:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:30:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:30:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:30:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:30:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connection.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:30:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connection.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:30:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connection.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:30:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connection.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:30:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connection.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:30:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connection.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:30:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:30:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:30:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:30:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:30:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:30:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:30:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:30:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:30:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:30:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:30:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:30:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:30:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:30:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:30:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:30:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:30:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:30:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:30:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:30:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:30:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:30:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:30:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:30:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: runtime.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: runtime.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:31:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: runtime.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:31:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: runtime.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:31:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:31:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:31:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:31:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:31:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:31:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:31:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:31:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:31:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:31:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:31:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:31:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:31:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL example-env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-23 16:31:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL example-env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-23 16:31:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/stage.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:31:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/stage.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:31:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sample_env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-23 16:31:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sample_env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-23 16:31:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: middleware/environment.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:31:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: middleware/environment.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:31:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stagingEnv.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:31:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stagingEnv.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:31:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/production.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:31:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/production.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:31:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:31:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:31:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environment.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:31:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environment.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:31:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: builder/.env-example ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:31:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: builder/.env-example ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:31:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:31:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:31:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:31:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:31:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:31:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:32:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:32:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:32:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _env.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:32:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _env.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:32:38 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
2025-02-23 16:32:38 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-23 16:32:38 --- ERROR: ErrorException [ 1 ]: Class 'Model_Settings' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2025-02-23 16:32:38 --- STRACE: ErrorException [ 1 ]: Class 'Model_Settings' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2025-02-23 16:33:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: form.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:33:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: form.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:33:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:33:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:33:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-23 16:33:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-23 16:33:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-23 16:33:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-23 16:33:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:33:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:33:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:33:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:33:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: systembc/password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:33:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: systembc/password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:33:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:33:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:35:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:35:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:49:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:49:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:49:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 16:49:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 16:55:00 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-02-23 16:55:00 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-02-23 16:56:26 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-02-23 16:56:26 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-02-23 17:00:56 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-02-23 17:00:56 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-02-23 17:24:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/db/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 17:24:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/db/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 17:24:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_configs/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 17:24:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_configs/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 17:24:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 17:24:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 17:24:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 17:24:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 17:24:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 17:24:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 17:48:24 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-02-23 17:48:24 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-02-23 18:38:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-23 18:38:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-23 19:07:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 19:07:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 19:08:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 19:08:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: httpd.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: httpd.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: protected/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: protected/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application-dev.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application-dev.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: karma.conf.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: karma.conf.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-23 20:21:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-23 20:21:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-02-23 20:21:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-23 20:21:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/app_dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/app_dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-23 20:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-23 20:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-02-23 20:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-23 20:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-23 20:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-23 20:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_errors.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_errors.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-23 20:21:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-23 20:21:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-secret.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-secret.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awstats/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awstats/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:21:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/config/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:21:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/config/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/email_service.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/email_service.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/.env_example ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/.env_example ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config/database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config/database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/nodemailer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/nodemailer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.141b0494.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.141b0494.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/2.ca066a4b.chunk.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/2.ca066a4b.chunk.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.e85f7a37.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.e85f7a37.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/server_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/server_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server-info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-23 20:22:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server-info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-23 20:22:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secured/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secured/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gatsby-config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gatsby-config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/default.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/default.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/controllers/merchant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/controllers/merchant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/controllers/partner.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/controllers/partner.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/objects/codes.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/objects/codes.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/controllers/users.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/controllers/users.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/development.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/development.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud/Scraper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud/Scraper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/storage.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/storage.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/routes-4aug.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/routes-4aug.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/routes.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/routes.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/s3_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/s3_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controller/admin/post.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controller/admin/post.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controller/api/post.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controller/api/post.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers/settings.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers/settings.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: getcpuutil.php-bakworking ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: getcpuutil.php-bakworking ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my_env/chakaash.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my_env/chakaash.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my_env/newsletter.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my_env/newsletter.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my_env/palash.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my_env/palash.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mytest/astech_robot.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mytest/astech_robot.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: partner/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: partner/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/controllers/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/controllers/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/local.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/local.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sms.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sms.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/s3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/s3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:22:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:22:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-23 20:22:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-23 20:29:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ADMIN/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:29:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ADMIN/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:29:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:29:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:29:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Application/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:29:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Application/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:29:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: APPLICATION/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:29:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: APPLICATION/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:29:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: BACKEND/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:29:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: BACKEND/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:30:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:30:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:30:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CONFIG/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:30:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CONFIG/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:30:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:30:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:30:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CORE/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:30:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CORE/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:31:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Cp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:31:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Cp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 20:31:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CP/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 20:31:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CP/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 21:36:44 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-02-23 21:36:44 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-02-23 21:47:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 21:47:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 21:47:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 21:47:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 21:47:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 21:47:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 21:47:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 21:47:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 21:47:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 21:47:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 21:47:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 21:47:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 21:47:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 21:47:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 21:47:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 21:47:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 21:47:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 21:47:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 21:47:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 21:47:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 21:47:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 21:47:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 21:47:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 21:47:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 21:47:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 21:47:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 21:47:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 21:47:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 21:47:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 21:47:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 21:47:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 21:47:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 21:47:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 21:47:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 21:47:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 21:47:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 21:47:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 21:47:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 21:47:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 21:47:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 21:47:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 21:47:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 21:47:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 21:47:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 21:47:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 21:47:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 21:47:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 21:47:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 21:47:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 21:47:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 21:47:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 21:47:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 21:47:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 21:47:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 21:47:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 21:47:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 21:47:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 21:47:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 21:47:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 21:47:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 21:47:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 21:47:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 21:47:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 21:47:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 21:50:26 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-02-23 21:50:26 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-02-23 21:54:00 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-02-23 21:54:00 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-02-23 22:17:31 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-02-23 22:17:31 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-02-23 22:21:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 22:21:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 22:21:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 22:21:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 22:21:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 22:21:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 22:21:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 22:21:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 22:21:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 22:21:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 22:21:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 22:21:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 22:21:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 22:21:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 22:21:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 22:21:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 22:21:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 22:21:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 22:21:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 22:21:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 22:21:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 22:21:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 22:21:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 22:21:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 22:21:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 22:21:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 22:21:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 22:21:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 22:21:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 22:21:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 22:21:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 22:21:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 22:21:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 22:21:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 22:21:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 22:21:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 22:21:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 22:21:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 22:21:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 22:21:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 22:21:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 22:21:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 22:21:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 22:21:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 22:21:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 22:21:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 22:21:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 22:21:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 22:21:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 22:21:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 22:21:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 22:21:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 22:21:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 22:21:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 22:21:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 22:21:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 22:21:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 22:21:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 22:21:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 22:21:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 22:21:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 22:21:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 22:21:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-23 22:21:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-23 22:53:31 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-02-23 22:53:31 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}