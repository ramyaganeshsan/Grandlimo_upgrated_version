<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2026-02-27 00:03:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/sonicos/is-sslvpn-enabled was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-02-27 00:03:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/sonicos/is-sslvpn-enabled was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 00:07:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 00:07:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 00:15:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 00:15:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 00:24:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 00:24:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 00:24:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 00:24:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 00:24:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 00:24:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 00:24:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 00:24:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 00:24:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 00:24:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 00:24:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 00:24:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 00:24:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 00:24:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 00:24:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 00:24:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 00:24:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 00:24:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 00:24:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 00:24:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 00:24:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 00:24:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 00:24:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 00:24:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 00:24:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 00:24:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 00:24:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 00:24:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 00:24:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 00:24:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 00:24:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 00:24:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 00:24:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 00:24:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 00:24:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 00:24:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 00:24:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 00:24:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 00:24:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 00:24:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 00:24:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 00:24:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 00:24:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 00:24:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 00:24:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 00:24:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 00:24:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 00:24:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 00:24:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 00:24:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 00:24:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 00:24:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 00:24:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 00:24:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 00:24:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 00:24:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 00:24:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 00:24:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 00:24:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 00:24:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 00:24:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 00:24:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 00:24:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 00:24:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 00:38:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service.web ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 00:38:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service.web ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 00:38:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service.web ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 00:38:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service.web ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 00:55:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 00:55:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 00:56:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 00:56:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 00:56:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL t4oya1vb5kfek4ch was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 00:56:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL t4oya1vb5kfek4ch was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 02:16:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 02:16:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 02:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Dr0v was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 02:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Dr0v was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 02:46:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 02:46:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 02:48:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: RDWeb/Pages/en-US/login.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 02:48:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: RDWeb/Pages/en-US/login.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 02:58:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL GponForm/diag_Form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 02:58:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL GponForm/diag_Form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 03:17:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 03:17:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 04:12:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 04:12:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 05:21:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 05:21:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 05:21:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 05:21:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 05:21:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 05:21:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 05:21:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 05:21:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 06:18:43 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-02-27 06:18:43 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-02-27 06:23:00 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2026-02-27 06:23:00 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2026-02-27 06:28:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Dr0v was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 06:28:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Dr0v was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 06:31:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 06:31:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 06:37:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 06:37:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 06:44:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL bin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 06:44:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL bin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 07:11:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 07:11:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 07:11:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 07:11:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 07:16:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 07:16:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 07:16:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 07:16:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 07:16:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL nagx08sfxe was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 07:16:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL nagx08sfxe was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 07:21:55 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-02-27 07:21:55 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-02-27 07:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 07:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 07:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 07:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 07:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 07:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 07:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 07:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 07:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 07:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 07:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 07:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 07:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 07:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 07:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 07:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 07:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 07:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 07:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 07:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 07:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 07:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 07:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 07:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 07:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 07:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 07:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 07:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 07:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 07:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 07:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 07:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 07:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 07:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 07:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 07:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 07:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 07:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 07:38:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 07:38:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 07:38:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 07:38:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 07:38:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 07:38:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 07:38:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 07:38:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 07:38:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 07:38:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 07:38:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 07:38:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 07:38:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 07:38:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 07:38:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 07:38:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 07:38:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 07:38:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 07:38:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 07:38:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 07:38:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 07:38:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 07:38:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 07:38:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 07:38:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 07:38:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 07:52:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 07:52:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 07:59:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 07:59:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 07:59:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 07:59:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 07:59:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 07:59:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 07:59:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 07:59:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 07:59:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 07:59:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 08:05:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 08:05:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 08:06:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 08:06:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 08:18:24 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-02-27 08:18:24 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-02-27 08:26:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 08:26:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 08:31:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 08:31:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 08:31:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 08:31:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 08:31:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 08:31:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 08:31:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 08:31:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 09:57:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 09:57:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 09:58:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 09:58:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 10:26:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 10:26:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 10:26:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 10:26:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 10:31:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 10:31:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 10:31:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 10:31:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/hellopress/wp_filemanager.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/hellopress/wp_filemanager.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: class-t.api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: class-t.api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zwso.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zwso.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/css/colors/blue/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/css/colors/blue/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: class19.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: class19.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: class20.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: class20.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: randkeyword.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: randkeyword.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fwe.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fwe.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/m.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/m.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: g.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: g.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tx1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tx1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xv.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xv.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: x56.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: x56.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htaccess.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htaccess.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: readme.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: readme.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: x50.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: x50.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fv.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fv.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: file.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: file.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lsd.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lsd.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: as.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: as.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wsd.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wsd.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gtc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gtc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: atx.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: atx.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: z60.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: z60.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 403.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 403.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: m.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: m.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/maint/about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/maint/about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/network/wp-conflg.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/network/wp-conflg.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: click.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: click.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lv.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lv.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: simple.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: simple.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cong.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cong.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/images/wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/images/wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cong.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cong.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: w.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: w.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ioxi-o.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ioxi-o.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 0x.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 0x.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 222.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 222.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/maint/maint.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/maint/maint.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classwithtostring.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classwithtostring.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: abcd.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: abcd.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autoload_classmap.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autoload_classmap.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inputs.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inputs.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alfa.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alfa.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/twentytwentytwo/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/twentytwentytwo/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/js/wp-conflg.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/js/wp-conflg.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/wp-conflg.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/wp-conflg.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/css/wp-conflg.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/css/wp-conflg.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manager.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manager.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: item.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: item.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugins/Cache/footer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugins/Cache/footer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sx.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sx.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/maint/admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/maint/admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alfa.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alfa.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: byp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: byp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-trackback.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-trackback.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/network/plugins.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/network/plugins.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gmo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gmo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/ID3/about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/ID3/about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/SimplePie/wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/SimplePie/wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: filemanager/dialog.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: filemanager/dialog.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/maint/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/maint/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/customize/about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/customize/about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/function.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/function.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/autoload_classmap.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/autoload_classmap.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/style-engine/about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/style-engine/about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ww1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ww1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/function.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/function.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/function.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/function.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/colors/blue/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/colors/blue/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/user/about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/user/about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/js/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/js/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/upgrade/about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/upgrade/about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/assets/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/assets/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/radio.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/radio.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/fonts/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/fonts/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/twentytwentytwo/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/twentytwentytwo/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: class.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: class.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bless5.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bless5.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/js/codemirror/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/js/codemirror/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/block-patterns/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/block-patterns/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lock360.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lock360.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: f35.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: f35.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ioxi-o1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ioxi-o1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: juuuu.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: juuuu.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ha.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ha.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gg.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gg.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: we2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: we2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 04.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 04.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 333.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 333.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 520.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 520.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ar.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ar.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: x.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: x.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xx.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xx.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gifclass4.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gifclass4.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2clas.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2clas.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ave.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ave.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wrt.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wrt.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bibil.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bibil.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: radio.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: radio.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: file7.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: file7.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gifclass.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gifclass.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/css/colors/midnight/about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/css/colors/midnight/about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nox.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nox.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: file48.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: file48.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: class9.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: class9.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: la.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: la.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bless11.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bless11.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ccou.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ccou.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ton.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ton.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 403.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 403.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: file9.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: file9.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ac.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ac.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new4.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new4.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pop.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pop.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: az.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: az.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xaz.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xaz.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: up4.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: up4.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1aa.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1aa.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: elp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: elp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wtz.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wtz.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: galex.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: galex.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ova.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ova.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vx.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vx.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rh.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:05:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rh.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:05:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Dr0v was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 11:05:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Dr0v was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 11:46:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 11:46:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 11:46:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL u9vl4egyf4v7v_m was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 11:46:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL u9vl4egyf4v7v_m was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 12:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 12:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 12:48:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL xnkukcpwri09m was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 12:48:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL xnkukcpwri09m was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 12:54:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL welcome was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 12:54:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL welcome was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:17:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL bins was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:17:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL bins was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:20:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:20:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:54:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: newinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: newinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: siteinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: siteinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.php.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.php.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pageinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pageinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.php.back ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.php.back ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpbb/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpbb/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: release_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: release_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:54:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:54:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php3 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php3 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.php.save.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.php.save.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.php_ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.php_ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/admin_phpinfo.php4 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/admin_phpinfo.php4 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:54:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:54:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.list ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.list ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL printenv was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:54:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL printenv was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:54:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL environment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:54:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL environment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:54:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL envrc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:54:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL envrc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:54:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: printenv.tmp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: printenv.tmp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.prod.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.prod.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.test.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.test.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-02-27 13:54:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:54:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:54:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:54:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailgun.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailgun.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ansible/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ansible/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/smtp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/smtp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:54:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:54:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:00 --- ERROR: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH/classes/controller/api.php [ 50 ]
2026-02-27 13:55:00 --- STRACE: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH/classes/controller/api.php [ 50 ]
--
#0 /var/www/html/application/classes/controller/api.php(50): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 50, Array)
#1 [internal function]: Controller_Api->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Api))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-02-27 13:55:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:55:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:55:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:55:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:55:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:55:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:55:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:55:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:55:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-secret.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-secret.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awstats/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awstats/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/cache/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/cache/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/app/private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/app/private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php5.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php5.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server-info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:55:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server-info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:55:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-credentials.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-credentials.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-02-27 13:55:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:55:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: À ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: À ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: .vscode/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: .vscode/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 07-accessing-data/begin/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 07-accessing-data/begin/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 07-accessing-data/end/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 07-accessing-data/end/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 08-routing/begin/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 08-routing/begin/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 08-routing/end/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 08-routing/end/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 09-managing-state/begin/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 09-managing-state/begin/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 09-managing-state/end/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 09-managing-state/end/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 123.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 123.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 3-sequelize/final/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 3-sequelize/final/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 31_structure_tests/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 31_structure_tests/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL __debug__ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:55:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL __debug__ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:55:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL __debugbar was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:55:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL __debugbar was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:55:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __tests__/test-become/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __tests__/test-become/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _astro/[chunk-name].[hash].js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _astro/[chunk-name].[hash].js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _dev was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:55:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _dev was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:55:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _ignition was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:55:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _ignition was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:55:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _next/static/chunks/945-34f67d7c0866cf61b970.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _next/static/chunks/945-34f67d7c0866cf61b970.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _next/static/chunks/app/[...not-found]/page-63e952e68a371605.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _next/static/chunks/app/[...not-found]/page-63e952e68a371605.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _next/static/chunks/app/error.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _next/static/chunks/app/error.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _next/static/chunks/app/global-error.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _next/static/chunks/app/global-error.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _next/static/chunks/app/layout-a908fe02173ed4b1.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _next/static/chunks/app/layout-a908fe02173ed4b1.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _next/static/chunks/framework-[hash].js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _next/static/chunks/framework-[hash].js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _next/static/chunks/main-app-[hash].js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _next/static/chunks/main-app-[hash].js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _next/static/chunks/pages/_app-a9fba37d935ce3f3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _next/static/chunks/pages/_app-a9fba37d935ce3f3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _next/static/chunks/pages/_app-d1b5411bacd03f02.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _next/static/chunks/pages/_app-d1b5411bacd03f02.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _next/static/chunks/pages/_app-d25b242610000153a081.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _next/static/chunks/pages/_app-d25b242610000153a081.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _next/static/chunks/webpack-[hash].js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _next/static/chunks/webpack-[hash].js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: acme-challenge/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: acme-challenge/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: acme/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: acme/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: acme_challenges/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: acme_challenges/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: actions-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: actions-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:55:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:55:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:55:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:55:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-panel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-panel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminapp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminapp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL administrator was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:55:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL administrator was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:55:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminphp.php' ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminphp.php' ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: agora/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: agora/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alpha/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alpha/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: anaconda/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: anaconda/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apache.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apache.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apache/i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apache/i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apache/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apache/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apache/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apache/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apache2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apache2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.back ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.back ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.example ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.example ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.sample ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.sample ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/debug was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-02-27 13:55:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/debug was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:55:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-02-27 13:55:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:55:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-02-27 13:55:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:55:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/internal was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-02-27 13:55:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/internal was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:55:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/keys was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-02-27 13:55:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/keys was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:55:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/private was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-02-27 13:55:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/private was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:55:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/debug was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-02-27 13:55:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/debug was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:55:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app-7d66de919618d3830635.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app-7d66de919618d3830635.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app-order-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app-order-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.example ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.example ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.sample ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.sample ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.back ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.back ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/code/community/Nosto/Tagging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/code/community/Nosto/Tagging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL app/info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:55:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL app/info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:55:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app1-static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app1-static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app2-static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app2-static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dir/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dir/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_nginx_static_path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_nginx_static_path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Archipel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Archipel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asdf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asdf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset_img/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset_img/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/index-[hash].js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/index-[hash].js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/index-[hash].mjs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/index-[hash].mjs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/index-GquDNGwd.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/index-GquDNGwd.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/app.f8ec9fb3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/app.f8ec9fb3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/vendor-[hash].js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/vendor-[hash].js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Assignment3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Assignment3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Assignment4/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Assignment4/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: audio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: audio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-secret.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-secret.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/as-alias/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/as-alias/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/default/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/default/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/dev-env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/dev-env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/empty-values/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/empty-values/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/filename/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/filename/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/override-value/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/override-value/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/prod-env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/prod-env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back-end/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back-end/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/debug was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:55:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/debug was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:55:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backendfinaltest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backendfinaltest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base_dir/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base_dir/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: basic-network/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: basic-network/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bgoldd/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bgoldd/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bitcoind/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bitcoind/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blankon/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blankon/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blob/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blob/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blogs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blogs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blue/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blue/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bookchain-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bookchain-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Booking/Default.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Booking/Default.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boxes/oracle-vagrant-boxes/ContainerRegistry/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boxes/oracle-vagrant-boxes/ContainerRegistry/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boxes/oracle-vagrant-boxes/Kubernetes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boxes/oracle-vagrant-boxes/Kubernetes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boxes/oracle-vagrant-boxes/OLCNE/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boxes/oracle-vagrant-boxes/OLCNE/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bucoffea/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bucoffea/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL build was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:55:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL build was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:55:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/_app/immutable/chunks/[chunk].[hash].js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/_app/immutable/chunks/[chunk].[hash].js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/_app/immutable/entry/app.[hash].js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/_app/immutable/entry/app.[hash].js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/entry.client-[hash].js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/entry.client-[hash].js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/main.ba0c34b7.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/main.ba0c34b7.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/routes/index-[hash].js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/routes/index-[hash].js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cache.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cache.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cardea/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cardea/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdw-backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdw-backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/pass.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/pass.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch2-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch2-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch6-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch6-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch6a-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch6a-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch7-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch7-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch7a-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch7a-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch8-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch8-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch8a-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch8a-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch8b-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch8b-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Chai/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Chai/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: challenge/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: challenge/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: challenges/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: challenges/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: charts/liveObjects/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: charts/liveObjects/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chat-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chat-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chiminey/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chiminey/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chunk-B2FODB4I.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chunk-B2FODB4I.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/mutual-fund-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/mutual-fund-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ClientApp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ClientApp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: clld_dir/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: clld_dir/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cmd/testdata/expected/dot_env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cmd/testdata/expected/dot_env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CodeGolf.Web/ClientApp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CodeGolf.Web/ClientApp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: codenames-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: codenames-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: collab-connect-web-application/server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: collab-connect-web-application/server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: collected_static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: collected_static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: community/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: community/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cache.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cache.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/default.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/default.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/keys.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/keys.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ContainerRegistry/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ContainerRegistry/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: containers/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: containers/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: control/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: control/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/Datavase/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/Datavase/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/persistence/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/persistence/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/src/main/resources/org/jobrunr/dashboard/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/src/main/resources/org/jobrunr/dashboard/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: counterblockd/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: counterblockd/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: counterwallet/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: counterwallet/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cronlab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cronlab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cryo_project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cryo_project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: custom/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: custom/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: d/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: d/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dataset1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dataset1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dataset2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dataset2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL db-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:55:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL db-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:55:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:55:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:55:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:55:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:55:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug/default/view.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug/default/view.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:55:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:55:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: delivery/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: delivery/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dep.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dep.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dev-api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:55:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dev-api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:55:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev-env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev-env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev_env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev_env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developerslv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developerslv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: devs.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: devs.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL devtools was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:55:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL devtools was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:55:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: directories/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: directories/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/js/app.[hash].js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/js/app.[hash].js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django-blog/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django-blog/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django_project_path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django_project_path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: doc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: doc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose/platform/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose/platform/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-elk/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-elk/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-network-healthcheck/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-network-healthcheck/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-node-mongo-redis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-node-mongo-redis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/compose/withMongo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/compose/withMongo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/compose/withPostgres/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/compose/withPostgres/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/db/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/db/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/examples/compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/examples/compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/postgres/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/postgres/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/webdav/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/webdav/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dodoswap-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dodoswap-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dotfiles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dotfiles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: downloads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: downloads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: drupal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: drupal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: e2e/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: e2e/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: engine/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: engine/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.example ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.example ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.template ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.template ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/dockers/mariadb-test/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/dockers/mariadb-test/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/dockers/php-apache/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/dockers/php-apache/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/example/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/example/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/template/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/template/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: envs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: envs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: error/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: error/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: errors/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: errors/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example02-golang-package/import-underscore/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example02-golang-package/import-underscore/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example27-how-to-load-env/sample01/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example27-how-to-load-env/sample01/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example27-how-to-load-env/sample02/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example27-how-to-load-env/sample02/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/01-simple-model/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/01-simple-model/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/02-complex-example/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/02-complex-example/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/03-one-to-many-relationship/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/03-one-to-many-relationship/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/04-many-to-many-relationship/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/04-many-to-many-relationship/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/05-migrations/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/05-migrations/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/06-base-service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/06-base-service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/07-feature-flags/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/07-feature-flags/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/08-performance/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/08-performance/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/09-production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/09-production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/10-subscriptions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/10-subscriptions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/11-transactions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/11-transactions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/drupal-separate-services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/drupal-separate-services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/react-dashboard/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/react-dashboard/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/sdl-first/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/sdl-first/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/sdl-first/prisma/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/sdl-first/prisma/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/vue-dashboard/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/vue-dashboard/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-cookie-auth-fauna/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-cookie-auth-fauna/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-dotenv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-dotenv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-firebase-authentication-serverless/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-firebase-authentication-serverless/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-react-relay-network-modern/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-react-relay-network-modern/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-relay-modern/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-relay-modern/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-universal-configuration-build-time/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-universal-configuration-build-time/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: exapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: exapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Exercise.Frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Exercise.Frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Exercise.Frontend/train/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Exercise.Frontend/train/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: export/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: export/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fastlane/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fastlane/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicons/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicons/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: FE/huey/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: FE/huey/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fedex/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fedex/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fhir-api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fhir-api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fileserver/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fileserver/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: films/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: films/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Final_Project/Airflow_Dag/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Final_Project/Airflow_Dag/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Final_Project/kafka_twitter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Final_Project/kafka_twitter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Final_Project/StartingFile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Final_Project/StartingFile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: finalVersion/lcomernbootcamp/projbackend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: finalVersion/lcomernbootcamp/projbackend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:55:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: first-network/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:55:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: first-network/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: FIRST_CONFIG/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: FIRST_CONFIG/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fisdom/fisdom/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fisdom/fisdom/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fixtures/blocks/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fixtures/blocks/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fixtures/fiber-debugger/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fixtures/fiber-debugger/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fixtures/flight/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fixtures/flight/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fixtures/kitchensink/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fixtures/kitchensink/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask_test_uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask_test_uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: font-icons/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: font-icons/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fonts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fonts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: framework/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: framework/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front-empathy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front-empathy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front-end/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front-end/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/momentum-fe/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/momentum-fe/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/react/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/react/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/vue/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/vue/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL frontend/web/debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:56:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL frontend/web/debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:56:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontendfinaltest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontendfinaltest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftpmaster/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftpmaster/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcloud.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcloud.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL gists/cache was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:56:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL gists/cache was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:56:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL gists/laravel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:56:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL gists/laravel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:56:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL gists/pusher was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:56:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL gists/pusher was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:56:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: github-connect/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: github-connect/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphiql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:56:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphiql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:56:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:56:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:56:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grems-api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grems-api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grems-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grems-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Hash/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Hash/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hasura/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hasura/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hc/restricted was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:56:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hc/restricted was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:56:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Helmetjs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Helmetjs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hgs-static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hgs-static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: higlass-website/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: higlass-website/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: horde/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: horde/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotpot-app-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotpot-app-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: http/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: http/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: httpboot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: httpboot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: httpdocs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: httpdocs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: HUNIV_migration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: HUNIV_migration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icon/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icon/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ikiwiki/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ikiwiki/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image_data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image_data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Imagebord/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Imagebord/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: in.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: in.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc.config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc.config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: includes/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: includes/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info4.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info4.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infophp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infophp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infos.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infos.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ini.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ini.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: InstantCV/server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: InstantCV/server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL internal-api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:56:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL internal-api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:56:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL internal was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:56:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL internal was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:56:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL internal/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:56:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL internal/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:56:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: isadmin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: isadmin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: items/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: items/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jenkins/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jenkins/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: joomla/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: joomla/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js-plugin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js-plugin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/app.[hash].js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/app.[hash].js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/app.bundle.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/app.bundle.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/chunk-79be581b.c4b0f5e4.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/chunk-79be581b.c4b0f5e4.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/chunk-vendors.[hash].js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/chunk-vendors.[hash].js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/chunks/[chunk-name].[hash].js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/chunks/[chunk-name].[hash].js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/contact_me.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/contact_me.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/vendor.[hash].js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/vendor.[hash].js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jsrelay/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jsrelay/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jupyter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jupyter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: khanlinks/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: khanlinks/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kibana/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kibana/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kodenames-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kodenames-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kolab-syncroton/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kolab-syncroton/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Kubernetes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Kubernetes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: l.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: l.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: latest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: latest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: layout/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: layout/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lcomernbootcamp/projbackend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lcomernbootcamp/projbackend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: leafer-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: leafer-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ledger_sync/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ledger_sync/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legacy/tests/9.1.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legacy/tests/9.1.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legacy/tests/9.2.0 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legacy/tests/9.2.0 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lemonldap-ng-doc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lemonldap-ng-doc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lemonldap-ng-fr-doc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lemonldap-ng-fr-doc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: letsencrypt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: letsencrypt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libraries/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libraries/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Library/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Library/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lindex.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lindex.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: linusadmin-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: linusadmin-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: linux/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: linux/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localhost/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localhost/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: locally/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: locally/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/development.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/development.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:56:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:56:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL logs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:56:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL logs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:56:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/app.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/app.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: magento/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: magento/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailinabox/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailinabox/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailman/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailman/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main-es2015.3c3aa123423ff18c0b00.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main-es2015.3c3aa123423ff18c0b00.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main-es2018.96dcf91e05121e327dcb.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main-es2018.96dcf91e05121e327dcb.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main-TDTOTK7F.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main-TDTOTK7F.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main-WTCAS2AO.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main-WTCAS2AO.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.0ad61943313a734cc3ac.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.0ad61943313a734cc3ac.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.2b8841d1a101dd041285.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.2b8841d1a101dd041285.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.35a08c25eb91de70487f.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.35a08c25eb91de70487f.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.457ddfd2b1341056.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.457ddfd2b1341056.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.48f1bbcf6201c5ea.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.48f1bbcf6201c5ea.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.58a95e8d8659972f.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.58a95e8d8659972f.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.702787bb88cacd05b11d.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.702787bb88cacd05b11d.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.b610bd7c7b9b7a47.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.b610bd7c7b9b7a47.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main_user/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main_user/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Makefile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:56:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Makefile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:56:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manifest.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manifest.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manual/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manual/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: master/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: master/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: memcached/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: memcached/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mentorg-lava-docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mentorg-lava-docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: micro-app-react-communication/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: micro-app-react-communication/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: micro-app-react/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: micro-app-react/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mindsweeper/gui/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mindsweeper/gui/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: minified/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: minified/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: misc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: misc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Modix/ClientApp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Modix/ClientApp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: monerod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: monerod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongodb/config/dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongodb/config/dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: monitoring/compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: monitoring/compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: moodledata/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: moodledata/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: msks/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: msks/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: munki_repo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: munki_repo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: music/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: music/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyRentals.Web/ClientApp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyRentals.Web/ClientApp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mysql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:56:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mysql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:56:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: name/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: name/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: netlify.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: netlify.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new-js/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new-js/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: next/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: next/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: niffler-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: niffler-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Nodejs-Projects/play-ground/login/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Nodejs-Projects/play-ground/login/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Nodejs-Projects/play-ground/ManageUserRoles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Nodejs-Projects/play-ground/ManageUserRoles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: noVNC/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: noVNC/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: now.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: now.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Nuke.App.Ui/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Nuke.App.Ui/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nuxt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nuxt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: o.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: o.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ocp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ocp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: of.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: of.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL old was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:56:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL old was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:56:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL old_site was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:56:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL old_site was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:56:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oldsanta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oldsanta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: opencart/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: opencart/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ops/vagrant/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ops/vagrant/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: option/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: option/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: orientdb-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: orientdb-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: outputs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: outputs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owncloud/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owncloud/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: p.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: p.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/styled-ui-docs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/styled-ui-docs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packed/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packed/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: page-editor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: page-editor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: panel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: panel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: parity/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: parity/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Passportjs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Passportjs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patchwork/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patchwork/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pfbe/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pfbe/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php52/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php52/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpcustom_info/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpcustom_info/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php4 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php4 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php5 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php5 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo4.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo4.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfodev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfodev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfos.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfos.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpMyAdmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:56:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpMyAdmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:56:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:56:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:56:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpsysinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:56:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpsysinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:56:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpsysinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpsysinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpsysinfo/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpsysinfo/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpsysinfo/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpsysinfo/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpsysinfo/phpsysinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpsysinfo/phpsysinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phptest.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phptest.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpversion.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpversion.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pi.php5 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pi.php5 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pictures/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pictures/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: platform/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: platform/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: playground/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: playground/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugin_static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugin_static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugins/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugins/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: post-deployment/.vscode/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: post-deployment/.vscode/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postfixadmin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postfixadmin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prestashop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prestashop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: preview-env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: preview-env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: preview/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: preview/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: price_hawk_client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: price_hawk_client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prisma/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prisma/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: processor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: processor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Procfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:56:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Procfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:56:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: projbackend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: projbackend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project_root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project_root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: protected/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: protected/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: psnlink/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: psnlink/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pt2/countries/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pt2/countries/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pt8/library-backend-gql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pt8/library-backend-gql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pub/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pub/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/system was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:56:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/system was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:56:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: q.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: q.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qq.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qq.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: question2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: question2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qv-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qv-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rabbitmq-cluster/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rabbitmq-cluster/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rails-api/react-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rails-api/react-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rails/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rails/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rasax/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rasax/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: react/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: react/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: react_todo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: react_todo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redmine/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redmine/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repos/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repos/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repository/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repository/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/mysql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/mysql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/phpmyadmin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/phpmyadmin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/rabbitmq/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/rabbitmq/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/rediscommander/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/rediscommander/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resourcesync/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resourcesync/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rest.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rest.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: restapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: restapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: results/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: results/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rollup.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rollup.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rosterBack/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rosterBack/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: roundcube/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: roundcube/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: roundcubemail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: roundcubemail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: run/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: run/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rust-backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rust-backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rust-backend/dao/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rust-backend/dao/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s-with-me-front/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s-with-me-front/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: saas/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: saas/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samples/chatroom/chatroom-spa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samples/chatroom/chatroom-spa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samples/docker/deploymentscripts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samples/docker/deploymentscripts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sapi/debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:56:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sapi/debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:56:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: script/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: script/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/fvt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/fvt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selfish-darling-backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selfish-darling-backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serve-browserbench/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serve-browserbench/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Serve_time_server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Serve_time_server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/s3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/s3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/src/persistence/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/src/persistence/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Server_with_db/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Server_with_db/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service-worker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service-worker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/adminer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/adminer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/deployment-agent/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/deployment-agent/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/documents/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/documents/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/graylog/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/graylog/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/jaeger/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/jaeger/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/minio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/minio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/monitoring/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/monitoring/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/portainer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/portainer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/redis-commander/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/redis-commander/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/registry/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/registry/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/simcore/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/simcore/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/traefik/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/traefik/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sessions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sessions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shibboleth/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shibboleth/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopware/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopware/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Simple_server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Simple_server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site-library/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site-library/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemaps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemaps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitestatic/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitestatic/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Socketio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Socketio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: source/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: source/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sources/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sources/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Sources/API/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Sources/API/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spearmint/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spearmint/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spikes/config-material-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spikes/config-material-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: SpotiApps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: SpotiApps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/__tests__/__fixtures__/instanceWithDependentSteps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/__tests__/__fixtures__/instanceWithDependentSteps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/__tests__/__fixtures__/typeScriptIntegrationProject/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/__tests__/__fixtures__/typeScriptIntegrationProject/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/__tests__/__fixtures__/typeScriptProject/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/__tests__/__fixtures__/typeScriptProject/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/__tests__/__fixtures__/typeScriptVisualizeProject/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/__tests__/__fixtures__/typeScriptVisualizeProject/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/add-auth/express/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/add-auth/express/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/assembly/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/assembly/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/character-service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/character-service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/client/mobile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/client/mobile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/core/tests/dotenv-files/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/core/tests/dotenv-files/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/gameprovider-service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/gameprovider-service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/front-end/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/front-end/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/archetype-resources/__rootArtifactId__-acceptance-test/src/test/resources/app-launcher-tile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/archetype-resources/__rootArtifactId__-acceptance-test/src/test/resources/app-launcher-tile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/renderer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/renderer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: srv6_controller/controller/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: srv6_controller/controller/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: srv6_controller/examples/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: srv6_controller/examples/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: srv6_controller/node-manager/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: srv6_controller/node-manager/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: st-js-be-2020-movies-two/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: st-js-be-2020-movies-two/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stack.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stack.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stackato-pkg/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stackato-pkg/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stag/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stag/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL staging-api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:56:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL staging-api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:56:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL staging was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:56:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL staging was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:56:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static-collected/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static-collected/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static-html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static-html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static-root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static-root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/*.chunk.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/*.chunk.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.11bc02d8.chunk.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.11bc02d8.chunk.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.1b34ee2a.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.1b34ee2a.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.335d17a0.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.335d17a0.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.36e5ec99.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.36e5ec99.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.48389ac6.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.48389ac6.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.4aa2819f.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.4aa2819f.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.602cea98.chunk.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.602cea98.chunk.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.87c766e3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.87c766e3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.89c971fa.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.89c971fa.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.8c18b542.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.8c18b542.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.bfa51071.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.bfa51071.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.ef8ecb99.chunk.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.ef8ecb99.chunk.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static_prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static_prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static_root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static_root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static_user/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static_user/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staticfiles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staticfiles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stats/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stats/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/debugbar/*.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/debugbar/*.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: strapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: strapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: style/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: style/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: styles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: styles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stylesheets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stylesheets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL swagger was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:56:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL swagger was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:56:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL system/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:56:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL system/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:56:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: target/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: target/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temanr10/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temanr10/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temanr9/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temanr9/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL test-api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:56:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL test-api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:56:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-network/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-network/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-network/addOrg3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-network/addOrg3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/aries-js-worker/fixtures/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/aries-js-worker/fixtures/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/adapter-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/adapter-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/agent-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/agent-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/couchdb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/couchdb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/demo/openapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/demo/openapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/did-method-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/did-method-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/did-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/did-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/edv-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/edv-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/openapi-demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/openapi-demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/sidetree-mock/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/sidetree-mock/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/universalresolver/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/universalresolver/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/vc-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/vc-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/fixtures/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/fixtures/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/fixtures/app_types/node/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/fixtures/app_types/node/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/fixtures/app_types/rails/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/fixtures/app_types/rails/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/fixtures/node_path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/fixtures/node_path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/integration/env-config/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/integration/env-config/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test0.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test0.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL test1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:56:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL test1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:56:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test123.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test123.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test4.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test4.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test5.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test5.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test6.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test6.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test7.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test7.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test8.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test8.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test9.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test9.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_info1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_info1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_info2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_info2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_info3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_info3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_info4.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_info4.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_info5.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_info5.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_phpinfo1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_phpinfo1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_phpinfo2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_phpinfo2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_phpinfo3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_phpinfo3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_phpinfo4.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_phpinfo4.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_phpinfo5.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_phpinfo5.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tester.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tester.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testfiles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testfiles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:56:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:56:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Tests/Application/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Tests/Application/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v10.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v10.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v11.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v11.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v12.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v12.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v13.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v13.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v7.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v7.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v8.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v8.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v9.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v9.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/drupal-test/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/drupal-test/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/Integration/Environment/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/Integration/Environment/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/todo-react/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/todo-react/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testwork_json/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testwork_json/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: theme/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: theme/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: theme_static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: theme_static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: thumb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: thumb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: thumbs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: thumbs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tiedostot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tiedostot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: time.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: time.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tmp/logs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tmp/logs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: token.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: token.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tool/view/phpinfo.view.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tool/view/phpinfo.view.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Travel_form/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Travel_form/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ts/prime/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ts/prime/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tz.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tz.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: u.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: u.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ubuntu/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ubuntu/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ui/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ui/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: unixtime/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: unixtime/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: unsplash-downloader/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: unsplash-downloader/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: up.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: up.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upfiles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upfiles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: urlmem-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: urlmem-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:57:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: User_info/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: User_info/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v1/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:57:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v1/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v1/debug was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:57:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v1/debug was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v1/private was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:57:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v1/private was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/github.com/gobuffalo/envy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/github.com/gobuffalo/envy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/github.com/subosito/gotenv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/github.com/subosito/gotenv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendors~main.f286c0f60bdc707d91a8.bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendors~main.f286c0f60bdc707d91a8.bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vercel.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vercel.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: videos/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: videos/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vite.config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vite.config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vm-docker-compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vm-docker-compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vod_installer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vod_installer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue-end/vue-til/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue-end/vue-til/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue/vuecli/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue/vuecli/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue_CRM/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue_CRM/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: w.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: w.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web-dist/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web-dist/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL web/debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:57:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL web/debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Web/siteMariage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Web/siteMariage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webpack-stats.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webpack-stats.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webpack.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webpack.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webroot_path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webroot_path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: websocket/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: websocket/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webstatic/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webstatic/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webui/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webui/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: well-known/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: well-known/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: whturk/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: whturk/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: windows/tests/9.2.x/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: windows/tests/9.2.x/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: windows/tests/9.3.x/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: windows/tests/9.3.x/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: workspace/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: workspace/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php-backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php-backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wpp-config.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wpp-config.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www-data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www-data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: x.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: x.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xx-final/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xx-final/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yarn.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yarn.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zmusic-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zmusic-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: :443/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: :443/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: :80/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: :80/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: :8080/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: :8080/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: :8081/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: :8081/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: :8443/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: :8443/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_email/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_email/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_keys.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_keys.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/private/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/private/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/uploads/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/uploads/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/wp-mail-smtp/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/wp-mail-smtp/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/contrib/sendgrid_mail/sendgrid_mail.module ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/contrib/sendgrid_mail/sendgrid_mail.module ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/contrib/sendgrid_mail/sendgrid_mail.settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/contrib/sendgrid_mail/sendgrid_mail.settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/contrib/sendgrid_mail/sendgrid_mail.services.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/contrib/sendgrid_mail/sendgrid_mail.services.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/contrib/sendgrid_mail/translations/sendgrid_mail.fr.po ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/contrib/sendgrid_mail/translations/sendgrid_mail.fr.po ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/uploads/wp-mail-smtp/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/uploads/wp-mail-smtp/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/backup/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/backup/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sendgrid_keys was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:57:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sendgrid_keys was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL private/sendgrid_keys was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:57:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL private/sendgrid_keys was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL private/sendgrid_config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:57:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL private/sendgrid_config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backup/sendgrid_keys was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:57:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backup/sendgrid_keys was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backup/sendgrid_config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:57:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backup/sendgrid_config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL secrets/sendgrid_keys was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:57:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL secrets/sendgrid_keys was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL secrets/sendgrid_config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:57:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL secrets/sendgrid_config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_Settings' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2026-02-27 13:57:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_Settings' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2026-02-27 13:57:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_Settings' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2026-02-27 13:57:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_Settings' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2026-02-27 13:57:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/sendgrid_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/sendgrid_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/sendgrid_keys.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/sendgrid_keys.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: instance/sendgrid_keys.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: instance/sendgrid_keys.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_keys.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_keys.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_keys.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_keys.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/packages/sendgrid.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/packages/sendgrid.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets/prod/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets/prod/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets/dev/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets/dev/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/sendgrid.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/sendgrid.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/sendgrid.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/sendgrid.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/sendgrid.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/sendgrid.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/sendgrid.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/sendgrid.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.phtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.phtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: À ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: À ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/application.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/application.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/empty/search/results was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:57:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/empty/search/results was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-02-27 13:57:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/service was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-02-27 13:57:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/service was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/system/info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-02-27 13:57:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/system/info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/gateway was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-02-27 13:57:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/gateway was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/command was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-02-27 13:57:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/command was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/admin/user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-02-27 13:57:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/admin/user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/admin/user/password was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-02-27 13:57:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/admin/user/password was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/admin/user/status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-02-27 13:57:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/admin/user/status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/admin/auth was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-02-27 13:57:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/admin/auth was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/admin/role was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-02-27 13:57:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/admin/role was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/admin/role/id was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-02-27 13:57:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/admin/role/id was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-02-27 13:57:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/sms-sender was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-02-27 13:57:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/sms-sender was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/finchat/contact/manager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-02-27 13:57:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/finchat/contact/manager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/finchat/privilege-api/forwarder was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-02-27 13:57:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/finchat/privilege-api/forwarder was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/finchat/privilege-api/forwarder/event ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/finchat/privilege-api/forwarder/event ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/finchat/open-api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-02-27 13:57:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/finchat/open-api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/upload was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-02-27 13:57:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/upload was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/savefile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-02-27 13:57:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/savefile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/files was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-02-27 13:57:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/files was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/files.remote.share ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/files.remote.share ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/netdisk/download was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-02-27 13:57:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/netdisk/download was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sources/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sources/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/api/bzycs.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/api/bzycs.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/api/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/api/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/api/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/api/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/finchat/open-api/auth/token ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/finchat/open-api/auth/token ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/account/oauth/token was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-02-27 13:57:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/account/oauth/token was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/account/oauth/ticket was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-02-27 13:57:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/account/oauth/ticket was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/tokens was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-02-27 13:57:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/tokens was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-02-27 13:57:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/auth was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-02-27 13:57:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/auth was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/authentication was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-02-27 13:57:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/authentication was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/auth/v1/pin/verify was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-02-27 13:57:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/auth/v1/pin/verify was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/register was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-02-27 13:57:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/register was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/resetpassword was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-02-27 13:57:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/resetpassword was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/drupal/coder/.git/info/refs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/drupal/coder/.git/info/refs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/drupal/coder/.git/info/exclude ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/drupal/coder/.git/info/exclude ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/drupal/coder/.git/objects/info ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/drupal/coder/.git/objects/info ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/drupal/coder/.git/objects/info/packs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/drupal/coder/.git/objects/info/packs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: member/space/company/info.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: member/space/company/info.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cmsmessages/information.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cmsmessages/information.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cmsmessages/information.aspx.cs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cmsmessages/information.aspx.cs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: module/info/include/mysql/phpcms_info.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: module/info/include/mysql/phpcms_info.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.test ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.test ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo-prod was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:57:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo-prod was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo-preprod was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:57:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo-preprod was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.stg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.stg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo-server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:57:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo-server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo-server.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo-server.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.srv ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.srv ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo-api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:57:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo-api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfoapi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:57:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfoapi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo_details.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo_details.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo_details was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:57:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo_details was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfomolten.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfomolten.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfodev was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:57:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfodev was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bitrix/admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bitrix/admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mambo/administrator/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mambo/administrator/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/zend/tool/framework/system/provider/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/zend/tool/framework/system/provider/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-content/plugins/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:57:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-content/plugins/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/mysql.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/mysql.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/uploads/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/uploads/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/uploads/mysql.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/uploads/mysql.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/backup/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/backup/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/backups/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/backups/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/db_backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/db_backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/uploads/db_backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/uploads/db_backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/backup/db_backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/backup/db_backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/fullbackup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/fullbackup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/fullwebsite.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/fullwebsite.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/data.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/data.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/backup/data.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/backup/data.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/uploads/data.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/uploads/data.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/backups/data.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/backups/data.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/backup/database.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/backup/database.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/backups/database.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/backups/database.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/wordpress.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/wordpress.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/backups/wordpress.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/backups/wordpress.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/dbdump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/dbdump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/uploads/dbdump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/uploads/dbdump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/backups/dbdump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/backups/dbdump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/backup/dbdump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/backup/dbdump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.bak1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.bak1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.inc.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.inc.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connect.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connect.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connection.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connection.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conn.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conn.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conn.asp.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conn.asp.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connection.asp.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connection.asp.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.jsp.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.jsp.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.inc.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.inc.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config_ucenter.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config_ucenter.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config_global.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config_global.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bitrix/php_interface/dbconn.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bitrix/php_interface/dbconn.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uc_server/data/config.inc.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uc_server/data/config.inc.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/config.inc.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/config.inc.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: npm-debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: npm-debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yarn-debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yarn-debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.txt.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.txt.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql_debug.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql_debug.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.local.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.local.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.local.php_old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.local.php_old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connectionstrings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connectionstrings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug-output.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug-output.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL symfony/_profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:57:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL symfony/_profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webdav/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webdav/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL php-information was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:57:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL php-information was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: run.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: run.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: startup.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: startup.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-credentials.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-credentials.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configure.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configure.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service.pwd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service.pwd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service.grp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service.grp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/local.xml.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/local.xml.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/open ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/open ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/oauth-private.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/oauth-private.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/oauth-public.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/oauth-public.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/stack.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/stack.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/auth.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/auth.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/filesystems.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/filesystems.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/queue.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/queue.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/session.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/session.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/view.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/view.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/logging.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/logging.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/broadcasting.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/broadcasting.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/views/errors/500.blade.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/views/errors/500.blade.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/views/errors/404.blade.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/views/errors/404.blade.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/views/welcome.blade.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/views/welcome.blade.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _debugbar/open was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:57:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _debugbar/open was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debugbar was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:57:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debugbar was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xdebug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xdebug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xdebug_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xdebug_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/symfony/debug/debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/symfony/debug/debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/composer/installed.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/composer/installed.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/autoload.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/autoload.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.env.example ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.env.example ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL artisan was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL artisan was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_socket.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_socket.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testdb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testdb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: errors.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: errors.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: export.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: export.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.2.5-mysql-en.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.2.5-mysql-en.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/setup/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/setup/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqladmin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqladmin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbadmin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbadmin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpminiadmin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpminiadmin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqladmin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqladmin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/database.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/database.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database_backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database_backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL node_modules was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:57:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL node_modules was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL vendor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:57:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL vendor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tmp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:57:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tmp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/wp-config-sample.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/wp-config-sample.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL id_rsa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:57:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL id_rsa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: id_rsa.pub ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: id_rsa.pub ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: key.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: key.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssl.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssl.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cert.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cert.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selfsigned.crt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selfsigned.crt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selfsigned.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selfsigned.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: httpd.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: httpd.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.override.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.override.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Dockerfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 13:57:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Dockerfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 13:57:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/web.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/web.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: META-INF/context.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: META-INF/context.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/settings.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/settings.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/sql.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/sql.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/adminer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/adminer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/sqladmin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/sqladmin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpmyadmin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpmyadmin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/secret.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/secret.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/secret.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/secret.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config_dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config_dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index-dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index-dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index-test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index-test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: maintenance.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: maintenance.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: maintenance.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: maintenance.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: under-construction.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: under-construction.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: down.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: down.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install/install.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install/install.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upgrade.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upgrade.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upgrade/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upgrade/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upgrader.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upgrader.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: migrate.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: migrate.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: migration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: migration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/install.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/install.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/db.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/db.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/deploy.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/deploy.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: init.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: init.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uninstall.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uninstall.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: remove.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: remove.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:57:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: update.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:57:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: update.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:58:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: delete.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:58:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: delete.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:58:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sample.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:58:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sample.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:58:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:58:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:58:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:58:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 13:58:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sample-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 13:58:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sample-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 14:34:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL alone/start was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 14:34:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL alone/start was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 14:55:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Dr0v was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 14:55:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Dr0v was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 16:10:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:10:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:31:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 16:31:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 16:31:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:31:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:31:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:31:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:31:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:31:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:31:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:31:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:31:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:31:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:31:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:31:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:31:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:31:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:31:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:31:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:31:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:31:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:31:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:31:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:31:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:31:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:31:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:31:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:31:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:31:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:31:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:31:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:31:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.override.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:31:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.override.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:31:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.dev.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:31:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.dev.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:31:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:31:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:31:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:31:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:31:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:31:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:31:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:31:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:31:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:31:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:31:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:31:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:31:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:31:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:31:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:31:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:31:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:31:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:31:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:31:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:31:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:31:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:31:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:31:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:31:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:31:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:31:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:31:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:31:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:31:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:31:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chunk.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:31:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chunk.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:31:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:31:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:31:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:31:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:31:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:31:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:31:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:31:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:31:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:31:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:31:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:31:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:31:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/static/js/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:31:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/static/js/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:31:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:31:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:31:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:31:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:31:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _next/static/chunks/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:31:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _next/static/chunks/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:31:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _next/static/chunks/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:31:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _next/static/chunks/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/master.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/master.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application-dev.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application-dev.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application-prod.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application-prod.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/default.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/default.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/local.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/local.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 16:32:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 16:32:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/configprops was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 16:32:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/configprops was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 16:32:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-02-27 16:32:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 16:32:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/settings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-02-27 16:32:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/settings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 16:32:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-02-27 16:32:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 16:32:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.streamlit/secrets.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.streamlit/secrets.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/ubuntu/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/ubuntu/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/ec2-user/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/ec2-user/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/node/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/node/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecosystem.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecosystem.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/framework/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/framework/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: @fs/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: @fs/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: @fs/root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: @fs/root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL @fs/proc/self/environ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 16:32:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL @fs/proc/self/environ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 16:32:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: @fs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: @fs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: @fs/root/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: @fs/root/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: @fs/home/ubuntu/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: @fs/home/ubuntu/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: @fs/home/node/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: @fs/home/node/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: @fs/app/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: @fs/app/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: @fs/app/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: @fs/app/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:32:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: @fs/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:32:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: @fs/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 16:37:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: RDWeb/Pages/en-US/login.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 16:37:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: RDWeb/Pages/en-US/login.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-services.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-services.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manifest.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manifest.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebaseConfig.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebaseConfig.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/init.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/init.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: page-data/app-data.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: page-data/app-data.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: runtime-es2015.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: runtime-es2015.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: include/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: include/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serviceaccount.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serviceaccount.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: GoogleService-Info.plist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: GoogleService-Info.plist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apikeys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apikeys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/app.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/app.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __/firebase/init.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __/firebase/init.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: precache-manifest.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: precache-manifest.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __/firebase/init.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __/firebase/init.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/js/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/js/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/uploads/google-services.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/uploads/google-services.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: polyfills.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: polyfills.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chunk-vendors.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chunk-vendors.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apikeys.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apikeys.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: init.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: init.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/vendor.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/vendor.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _next/static/chunks/pages/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _next/static/chunks/pages/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/wp/v2/settings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/wp/v2/settings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebaseConfig.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebaseConfig.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: framework.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: framework.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: polyfills-es5.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: polyfills-es5.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-keys.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-keys.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _next/static/chunks/framework.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _next/static/chunks/framework.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _nuxt/vendors.app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _nuxt/vendors.app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/runtime.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/runtime.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main-es5.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main-es5.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/chunk-vendors.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/chunk-vendors.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scripts.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scripts.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: runtime.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: runtime.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sw.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sw.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/keys was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/keys was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/js/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/js/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/settings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/settings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: polyfills-es2015.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: polyfills-es2015.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/js/bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/js/bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service-worker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service-worker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: runtime-es5.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: runtime-es5.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/init was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/init was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/vendor.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/vendor.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/static/js/bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/static/js/bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _nuxt/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _nuxt/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 17:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _nuxt/runtime.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _nuxt/runtime.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _nuxt/commons.app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _nuxt/commons.app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/scripts.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/scripts.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-02-27 17:21:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 17:21:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main-es2015.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main-es2015.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: constants.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: constants.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-02-27 17:21:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 17:21:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _next/static/chunks/pages/_app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _next/static/chunks/pages/_app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: commons.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: commons.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _next/static/chunks/webpack.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _next/static/chunks/webpack.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/static/js/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/static/js/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/polyfills.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/settings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-02-27 17:21:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/polyfills.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/settings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 17:21:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _next/static/chunks/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _next/static/chunks/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _nuxt/pages/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _nuxt/pages/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/settings.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/settings.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/vendor.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/vendor.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:21:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:21:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:29:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:29:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 17:44:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mcp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 17:44:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mcp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 17:44:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sse was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 17:44:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sse was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 17:44:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 17:44:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 18:39:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 18:39:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 18:46:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 18:46:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 19:15:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 19:15:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 19:42:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/hellopress/wp_filemanager.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/hellopress/wp_filemanager.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: w4.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: w4.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yawa.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yawa.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wolv.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wolv.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mml.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mml.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tymn.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tymn.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: g.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: g.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bal.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bal.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bengi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bengi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/images/wp-conflg.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/images/wp-conflg.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boots.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boots.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samfa.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samfa.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-includes/css/dist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 19:42:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-includes/css/dist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 19:42:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aa.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aa.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates/beez/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates/beez/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: w.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: w.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: x.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: x.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-includes/js/tinymce/themes/inlite was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 19:42:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-includes/js/tinymce/themes/inlite was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 19:42:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/js/pe9rsn.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/js/pe9rsn.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: special.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: special.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/upgrade/about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/upgrade/about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/js/widgets/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/js/widgets/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/assets/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/assets/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inputs.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inputs.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-monamon.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-monamon.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-includes/assets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 19:42:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-includes/assets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 19:42:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-includes/sitemaps was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 19:42:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-includes/sitemaps was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 19:42:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zsec.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zsec.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-content/plugins/erinyani was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 19:42:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-content/plugins/erinyani was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 19:42:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/cong.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/cong.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/css/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/css/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-includes/l10n was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 19:42:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-includes/l10n was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 19:42:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/images/smilies/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/images/smilies/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: d2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: d2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL assets/css/dist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 19:42:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL assets/css/dist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 19:42:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/uploads/2021/02/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/uploads/2021/02/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: products/about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: products/about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-includes/js/jquery was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 19:42:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-includes/js/jquery was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 19:42:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/js/fi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/js/fi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wc49.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wc49.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: TL.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: TL.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fck.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fck.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: x123x.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: x123x.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-michan.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-michan.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nw2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nw2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blackmini.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blackmini.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gssdd.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gssdd.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: F19.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: F19.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: F1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: F1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fff.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fff.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: R57.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: R57.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 4h.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 4h.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yussef.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yussef.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bs1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bs1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: BDKR28WP.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: BDKR28WP.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zu.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zu.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alpha.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alpha.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: opts.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: opts.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-act.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-act.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ze.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ze.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: seetox.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: seetox.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-content was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 19:42:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-content was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 19:42:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugins.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugins.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xoot.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xoot.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: X57.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: X57.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: file59.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: file59.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/css/bolt.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/css/bolt.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xa.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xa.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: er.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: er.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fault.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fault.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: motu.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: motu.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 66.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 66.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: leuk.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: leuk.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xqq.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xqq.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kolda.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kolda.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nw.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nw.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 666.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 666.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kj.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kj.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: un.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: un.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fs.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fs.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ms.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ms.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cu.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cu.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 0.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 0.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ms-edit.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ms-edit.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grsiuk.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grsiuk.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-blog.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-blog.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-access.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-access.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a1vx.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a1vx.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sbhu.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sbhu.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-the.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-the.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 06.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 06.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classwithtostring.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classwithtostring.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fot.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fot.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ff1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ff1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: forbidals.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: forbidals.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erty.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erty.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev1s.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev1s.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ffd.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ffd.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admiin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admiin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ol.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ol.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Sanskrit.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Sanskrit.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vxrl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vxrl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: re.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: re.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: num.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: num.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: makeasmtp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: makeasmtp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vxrl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vxrl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: in.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: in.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: style.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: style.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: we.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: we.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zwso.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zwso.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: karak.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: karak.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prv8.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prv8.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lock360.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lock360.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 155.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 155.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: goat.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: goat.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ext.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ext.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inputs.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inputs.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ioxi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ioxi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fe5.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fe5.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ov.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ov.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: goods.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: goods.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: abcd.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: abcd.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: class.1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: class.1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: async.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: async.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ff.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ff.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ioxi-o.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ioxi-o.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manager.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manager.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-update.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-update.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: file.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: file.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cbrfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cbrfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gifclass.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gifclass.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: miansha.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: miansha.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tinyfilemanager.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tinyfilemanager.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ok.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ok.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: muzu.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: muzu.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reze.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reze.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: styll.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: styll.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: x7.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: x7.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: thebe.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: thebe.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ddd.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ddd.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bgymj.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bgymj.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ioxi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ioxi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xpwer1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xpwer1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lala.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lala.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/images/commentv.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/images/commentv.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/images/wp-conflg.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/images/wp-conflg.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/images/wp-conflg.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/images/wp-conflg.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL x was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 19:43:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL x was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 19:43:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 222.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 222.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminfuns.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminfuns.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-includes/PHPMailer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 19:43:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-includes/PHPMailer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 19:43:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xx.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xx.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/js/wp-conflg.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/js/wp-conflg.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: f5.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: f5.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flower.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flower.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: f6.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: f6.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: edit.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: edit.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-includes/js/dist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 19:43:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-includes/js/dist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 19:43:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-includes/SimplePie was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 19:43:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-includes/SimplePie was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 19:43:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/Text/Diff/Engine/about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/Text/Diff/Engine/about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wsd.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wsd.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jane.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jane.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alfa.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alfa.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: x.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: x.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xxxx.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xxxx.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: class.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: class.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: f35.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: f35.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: update/f35.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: update/f35.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: class-t.api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: class-t.api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/maint/about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/maint/about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/setup-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/setup-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/ID3/about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/ID3/about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: init.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: init.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/pwnd/as.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/pwnd/as.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bless.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bless.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: X7x.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: X7x.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 166.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 166.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plss3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plss3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/user/about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/user/about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lala.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lala.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aaa.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aaa.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/assets/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/assets/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jsond.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jsond.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 19:43:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: av.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 19:43:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: av.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 20:04:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL bins was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 20:04:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL bins was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 20:05:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 20:05:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 20:23:17 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2026-02-27 20:23:17 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-02-27 20:24:11 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2026-02-27 20:24:11 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2026-02-27 20:28:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 20:28:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 20:28:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 20:28:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 20:43:20 --- ERROR: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2026-02-27 20:43:20 --- STRACE: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2026-02-27 20:54:46 --- ERROR: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
2026-02-27 20:54:46 --- STRACE: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(1303): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 1303, Array)
#1 [internal function]: Controller_Passengers->action_login()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-02-27 20:58:23 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-02-27 20:58:23 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-02-27 20:58:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 20:58:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 21:04:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 21:04:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 21:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 21:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 21:18:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 21:18:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 21:20:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/hellopress/wp_filemanager.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 21:20:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/hellopress/wp_filemanager.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 21:20:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 21:20:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 21:24:00 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2026-02-27 21:24:00 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-02-27 21:36:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL etc/machine-id was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 21:36:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL etc/machine-id was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 21:42:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2026-02-27 21:42:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2026-02-27 21:45:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 21:45:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 21:52:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-02-27 21:52:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-02-27 21:54:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL alone/start was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 21:54:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL alone/start was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 21:54:01 --- ERROR: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
2026-02-27 21:54:01 --- STRACE: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(1303): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 1303, Array)
#1 [internal function]: Controller_Passengers->action_login()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-02-27 22:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 22:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 22:13:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 22:13:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 22:14:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL bin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 22:14:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL bin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 22:24:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 22:24:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-02-27 23:06:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-02-27 23:06:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}