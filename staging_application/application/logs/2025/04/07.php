<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2025-04-07 00:09:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL json was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-07 00:09:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL json was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-07 00:16:31 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-04-07 00:16:31 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-04-07 00:33:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 00:33:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 03:51:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manager/text/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-04-07 03:51:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manager/text/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-07 04:28:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dependencies/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 04:28:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dependencies/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 04:28:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 04:28:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 04:28:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 04:28:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 04:28:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 04:28:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 04:28:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 04:28:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 04:28:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 04:28:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 04:28:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 04:28:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 04:28:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 04:28:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 04:28:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 04:28:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 04:28:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-07 04:28:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-07 04:29:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sample.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 04:29:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sample.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 04:29:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: community/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 04:29:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: community/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 04:29:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ~admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 04:29:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ~admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 04:29:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 04:29:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 04:29:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pos/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 04:29:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pos/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 04:29:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 04:29:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 04:29:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 04:29:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 04:29:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 04:29:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 04:29:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 04:29:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 04:29:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awstats/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 04:29:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awstats/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 04:29:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: profile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 04:29:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: profile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 04:29:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: travis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 04:29:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: travis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 04:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: novnc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 04:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: novnc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 04:29:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Media/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 04:29:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Media/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 04:29:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 04:29:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 04:29:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: items/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 04:29:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: items/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 04:29:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: club/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 04:29:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: club/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 04:59:46 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-04-07 04:59:46 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-04-07 05:14:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logon/LogonPoint/tmindex.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 05:14:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logon/LogonPoint/tmindex.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 05:14:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vpn/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 05:14:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vpn/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 05:23:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 05:23:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 05:23:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 05:23:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 05:23:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 05:23:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 05:23:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 05:23:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 05:23:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 05:23:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 05:23:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 05:23:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 05:23:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 05:23:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 05:23:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 05:23:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 05:23:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 05:23:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 05:23:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 05:23:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 05:23:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 05:23:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 05:23:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 05:23:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 05:23:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 05:23:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 05:23:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 05:23:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 05:23:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 05:23:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 05:23:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 05:23:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 05:23:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 05:23:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 05:23:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 05:23:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 05:40:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 05:40:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:03:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:03:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:06:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:06:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:07:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-07 06:07:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-07 06:21:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-07 06:21:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-07 06:21:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:21:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:21:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-07 06:21:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-07 06:21:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-07 06:21:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-07 06:21:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-07 06:21:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-07 06:21:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-07 06:21:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-07 06:21:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:21:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:21:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:21:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:21:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-07 06:21:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-07 06:21:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:21:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:21:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:21:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-07 06:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-07 06:43:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:43:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:44:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:44:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:44:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:44:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:44:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:44:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:44:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpversion.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:44:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpversion.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:44:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:44:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:44:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:44:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:44:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infophp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:44:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infophp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:44:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:44:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:44:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: time.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:44:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: time.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xx.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xx.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:44:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:44:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:44:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:44:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:44:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phptest.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:44:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phptest.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:44:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:44:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:44:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:44:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:44:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:44:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:44:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:44:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:44:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:44:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:44:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:44:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:44:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:44:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:44:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:44:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:44:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:44:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: installation/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: installation/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: installation/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: installation/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infos.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infos.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfos.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfos.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: p.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: p.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-07 06:45:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-07 06:45:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/inc/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/inc/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cf_scripts/scripts/ajax/ckeditor/plugins/pgrfilemanager/php/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cf_scripts/scripts/ajax/ckeditor/plugins/pgrfilemanager/php/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: framework/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: framework/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: include/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: include/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: includes/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: includes/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: installer/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: installer/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: library/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: library/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: piwik/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: piwik/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugins/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugins/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:45:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: typo3/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:45:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: typo3/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:46:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webmaster/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:46:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webmaster/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:46:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:46:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:46:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/wp-filemanager/incl/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:46:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/wp-filemanager/incl/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:46:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: z.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:46:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: z.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:46:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: z1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:46:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: z1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:46:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tz.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:46:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tz.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:46:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testphp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:46:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testphp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:46:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:46:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:46:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:46:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:46:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:46:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:46:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:46:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:46:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:46:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:46:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:46:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:46:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:46:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:46:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo4.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:46:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo4.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:46:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo5.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:46:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo5.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:46:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:46:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:46:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:46:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:46:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:46:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:46:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:46:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:46:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: b.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:46:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: b.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:46:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: c.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:46:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: c.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:46:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: d.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:46:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: d.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:46:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: e.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:46:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: e.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:46:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: f.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:46:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: f.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:46:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: j.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:46:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: j.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:46:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:46:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:46:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: l.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:46:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: l.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:46:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: m.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:46:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: m.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:46:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: n.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:46:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: n.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:46:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: o.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:46:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: o.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:46:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: q.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:46:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: q.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:46:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: r.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:46:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: r.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:46:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:46:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:46:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: t.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:46:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: t.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:46:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: u.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:46:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: u.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:46:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:46:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:46:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: w.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:46:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: w.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:46:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: y.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:46:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: y.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:46:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:46:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:46:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:46:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:46:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:46:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:46:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:46:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:46:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:46:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:46:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:46:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:46:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:46:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:46:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:46:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:46:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:46:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:47:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:47:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:47:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:47:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:47:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:47:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:47:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:47:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:47:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:47:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:47:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:47:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:47:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:47:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:47:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blogs/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:47:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blogs/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:47:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blogs/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:47:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blogs/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:47:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: forum/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:47:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: forum/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:47:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: forum/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:47:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: forum/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:47:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: forums/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:47:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: forums/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:47:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: joomla/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:47:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: joomla/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:47:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: joomla/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:47:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: joomla/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:47:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: drupal/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:47:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: drupal/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:47:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: drupal/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:47:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: drupal/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:47:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:47:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:47:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:47:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:47:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:47:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:47:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:47:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:47:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:47:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:48:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:48:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:48:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:48:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:48:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:48:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:48:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:48:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:48:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:48:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:48:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:48:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:48:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:48:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:48:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:48:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:48:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:48:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:48:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:48:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:48:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:48:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:48:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:48:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:48:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:48:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:48:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:48:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:48:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:48:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:48:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:48:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:48:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: include/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:48:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: include/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:48:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: includes/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:48:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: includes/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:48:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:48:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:48:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:48:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:48:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:48:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:48:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:48:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:48:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:48:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:48:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:48:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:48:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manual/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:48:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manual/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:48:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manual/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:48:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manual/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:48:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:48:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:48:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:48:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:48:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:48:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:48:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backdoor.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:48:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backdoor.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:48:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cmd.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:48:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cmd.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:48:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: c99.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:48:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: c99.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:48:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: r57.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:48:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: r57.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:48:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:48:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:48:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpadmin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:48:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpadmin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:48:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:48:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:48:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:48:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:48:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terminal.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:48:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terminal.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:49:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webshell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:49:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webshell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:49:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: access.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:49:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: access.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:49:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:49:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:49:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:49:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:49:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: version.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:49:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: version.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:49:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:49:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:49:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:49:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:49:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: check.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:49:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: check.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:49:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ping.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:49:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ping.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:49:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/index.php/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:49:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/index.php/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:49:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-info/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:49:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-info/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:49:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:49:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:49:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:49:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:49:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:49:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:49:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:49:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:49:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-04-07 06:49:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-07 06:49:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-07 06:49:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-07 06:49:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:49:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:49:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:49:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:49:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:49:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:49:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:49:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:49:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:49:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:49:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/web/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:49:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/web/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:49:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/web/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:49:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/web/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:49:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/web/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:49:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/web/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:49:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: typo3conf/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:49:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: typo3conf/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:49:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:49:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:49:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:49:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:49:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:49:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:49:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:49:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:49:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:49:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:50:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/app_dev.php/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:50:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/app_dev.php/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:50:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:50:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:50:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:50:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:50:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:50:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:50:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:50:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:50:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:50:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:50:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:50:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:50:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:50:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:50:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:50:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:50:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: theme/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:50:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: theme/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:50:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: theme/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:50:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: theme/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:50:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:50:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:50:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:50:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:50:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:50:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:50:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:50:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:50:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:50:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:50:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:50:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:50:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:50:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:50:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:50:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:50:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:50:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:50:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:50:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:50:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:50:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:50:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:50:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:50:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stats/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:50:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stats/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:50:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stats/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:50:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stats/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:50:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:50:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:50:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:50:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:50:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:50:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:51:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:51:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:51:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:51:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:51:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:51:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:51:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:51:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:51:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:51:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:51:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setting/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:51:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setting/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:51:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setting/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:51:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setting/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:51:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:51:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:51:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:51:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:51:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: installer/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:51:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: installer/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:51:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:51:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:51:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:51:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:51:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbadmin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:51:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbadmin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:51:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbadmin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:51:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbadmin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:51:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myadmin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:51:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myadmin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:51:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:51:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:51:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:51:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:51:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:51:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:51:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:51:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:51:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-07 06:51:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-07 06:51:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin_area/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:51:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin_area/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:51:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminarea/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:51:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminarea/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:51:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin_panel/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:51:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin_panel/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:51:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin_panel/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:51:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin_panel/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:51:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminpanel/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:51:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminpanel/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:51:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: control/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:51:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: control/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:52:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: control/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:52:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: control/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:52:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: panel/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:52:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: panel/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:52:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: panel/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:52:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: panel/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:52:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webadmin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:52:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webadmin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:52:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webadmin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:52:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webadmin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:52:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sysadmin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:52:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sysadmin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:52:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sysadmin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:52:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sysadmin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:52:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:52:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:52:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:52:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:52:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: account/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:52:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: account/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:52:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: account/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:52:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: account/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:52:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accounts/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:52:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accounts/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:52:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accounts/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:52:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accounts/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:52:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: acct/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:52:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: acct/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:52:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: acct/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:52:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: acct/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:52:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: member/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:52:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: member/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:52:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: member/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:52:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: member/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:52:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: members/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:52:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: members/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:52:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: members/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:52:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: members/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:52:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:52:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:52:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:52:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:52:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:52:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:52:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:52:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:52:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cp/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:52:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cp/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:52:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admincp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:52:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admincp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:52:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admincp/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:52:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admincp/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:52:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: moderator/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:52:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: moderator/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: moderator/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: moderator/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:52:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:52:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:52:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:52:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:52:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/system/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:52:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/system/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:52:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/default/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:52:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/default/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:52:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php-dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:52:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php-dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:52:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-cgi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:52:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-cgi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:52:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-cgi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:52:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-cgi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:52:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: health.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:52:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: health.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:52:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: healthcheck.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:52:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: healthcheck.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:52:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:52:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:52:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/public/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:52:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/public/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:52:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:52:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:52:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:52:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:52:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: codeIgniter/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:52:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: codeIgniter/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:52:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secure/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:52:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secure/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:52:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secure/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:52:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secure/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:52:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: remote/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:52:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: remote/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:52:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: remote/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:52:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: remote/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:52:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: proxy/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:52:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: proxy/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:52:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: proxy/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:52:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: proxy/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:53:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:53:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:53:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:53:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:53:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-07 06:53:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-07 06:53:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:53:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:53:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v2/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:53:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v2/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:53:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v3/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:53:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v3/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:53:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:53:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:53:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:53:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:53:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:53:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:53:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:53:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:53:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:53:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:53:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:53:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:53:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:53:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:53:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:53:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:53:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.swp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:53:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.swp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:53:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:53:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:53:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:53:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:53:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:53:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:53:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:53:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:53:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:53:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:54:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php.swp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:54:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php.swp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:54:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:54:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:54:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:54:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:54:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:54:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:54:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:54:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:54:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php.swp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:54:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php.swp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:54:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:54:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:54:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:54:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:54:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:54:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:54:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.php.swp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:54:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.php.swp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:54:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:54:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:54:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:54:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:54:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:54:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:54:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:54:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:54:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.php.swp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:54:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.php.swp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:54:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:54:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:54:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:54:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:54:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:54:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:54:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:54:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:54:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:54:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:54:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: creds.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:54:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: creds.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:54:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: creds.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:54:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: creds.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:54:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: creds.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:54:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: creds.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:54:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: creds.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:54:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: creds.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:54:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: creds.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:54:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: creds.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:54:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:54:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:54:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:54:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:54:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:54:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:54:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:54:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:54:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.swp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:54:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.swp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:54:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/config~ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-04-07 06:54:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/config~ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-07 06:54:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:54:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:54:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:54:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:54:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:54:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:54:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:54:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:54:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-04-07 06:54:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-07 06:54:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v2/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-04-07 06:54:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v2/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-07 06:54:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-07 06:54:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-07 06:54:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:54:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:54:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:54:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:54:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:54:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:54:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:54:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:54:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:54:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:54:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL db_backup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-07 06:54:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL db_backup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-07 06:54:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:54:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:54:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:54:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:54:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:54:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:54:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:54:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:55:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:55:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:55:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL error_log was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-07 06:55:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL error_log was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-07 06:55:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:55:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:55:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:55:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:55:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL access_log was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-07 06:55:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL access_log was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-07 06:55:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:55:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:55:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:55:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:55:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql_error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:55:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql_error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:55:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqli_error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:55:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqli_error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:55:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:55:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:55:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database_error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:55:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database_error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:55:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:55:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:55:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:55:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:55:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:55:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:55:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:55:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:55:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:55:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:55:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server-info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-07 06:55:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server-info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-07 06:55:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:55:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:55:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:55:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:55:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:55:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:55:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:55:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:55:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:55:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:55:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:55:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:55:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:55:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:55:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/default/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:55:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/default/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:56:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sites/default/files/private was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-07 06:56:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sites/default/files/private was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-07 06:56:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:56:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 06:56:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-content/uploads was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-07 06:56:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-content/uploads was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-07 06:56:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 06:56:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 07:00:23 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-04-07 07:00:23 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-04-07 07:05:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 07:05:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 07:07:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 07:07:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 07:08:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 07:08:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 07:10:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/login.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 07:10:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/login.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 07:11:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 07:11:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 07:23:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 07:23:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 08:23:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 08:23:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 09:11:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-07 09:11:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-07 09:11:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL watchTowr-zurxdo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-07 09:11:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL watchTowr-zurxdo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-07 11:44:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 11:44:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 11:44:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-07 11:44:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-07 11:45:27 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-04-07 11:45:27 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-04-07 12:11:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL GponForm/diag_Form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-07 12:11:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL GponForm/diag_Form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-07 13:20:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:20:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:20:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:20:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:20:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dot.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:20:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dot.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:20:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repos/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:20:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repos/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:20:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:20:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:20:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aomanalyzer/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:20:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aomanalyzer/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:20:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:20:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:20:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: m/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:20:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: m/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:20:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:20:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:20:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:20:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:20:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:20:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:20:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:20:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:20:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: git/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:20:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: git/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:20:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:20:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:20:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wiki/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:20:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wiki/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:20:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:20:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:20:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: store/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:20:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: store/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:20:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:20:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:20:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:20:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:20:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amphtml/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:20:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amphtml/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:20:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samples/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:20:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samples/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:20:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/js/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:20:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/js/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:20:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:20:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:20:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:20:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:20:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:20:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:20:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:20:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:20:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repository/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:20:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repository/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:20:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:20:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:20:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:20:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:20:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:20:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:20:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flock/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:20:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flock/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:20:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old-cuburn/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:20:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old-cuburn/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:20:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:20:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:20:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:20:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:20:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:20:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:20:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:20:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:20:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:20:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:20:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awsconf.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:20:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awsconf.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:20:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:20:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:20:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:20:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:20:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:20:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:20:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __macosx/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:20:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __macosx/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:20:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:20:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:27:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:27:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:27:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:27:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:27:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:27:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:27:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:27:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:27:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:27:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:27:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:27:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:27:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:27:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:27:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:27:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:27:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:27:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:27:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:27:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:27:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:27:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:27:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:27:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:27:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:27:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:28:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:28:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:28:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:28:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:28:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:28:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:28:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:28:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:28:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:28:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:28:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:28:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:28:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:28:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:28:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:28:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:28:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:28:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 13:28:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 13:28:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 14:43:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/client/update was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-04-07 14:43:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/client/update was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-07 15:47:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:47:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:47:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:47:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:47:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: newinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:47:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: newinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:47:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: siteinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:47:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: siteinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:47:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.php.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:47:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.php.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:47:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:47:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:47:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:47:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:47:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:47:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:47:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pageinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:47:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pageinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:47:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: newinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:47:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: newinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:47:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: siteinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:47:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: siteinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:47:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.php.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:47:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.php.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:47:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:47:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:47:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pageinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:47:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pageinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:47:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.php.back ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:47:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.php.back ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:47:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.php.back ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:47:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.php.back ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:47:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpbb/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:47:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpbb/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:47:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/components/com_admin/models/sysinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:47:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/components/com_admin/models/sysinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpbb/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpbb/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/components/com_admin/models/sysinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/components/com_admin/models/sysinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: release_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: release_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: release_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: release_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-07 15:48:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-07 15:48:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-07 15:48:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-07 15:48:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php3 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php3 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php3 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php3 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.php.save.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.php.save.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.php.save.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.php.save.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.php_ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.php_ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.php_ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.php_ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/admin_phpinfo.php4 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/admin_phpinfo.php4 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/dataaccess/tablemetadata.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/dataaccess/tablemetadata.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/admin_phpinfo.php4 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/admin_phpinfo.php4 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/dataaccess/tablemetadata.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/dataaccess/tablemetadata.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-07 15:48:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-07 15:48:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.list ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.list ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL printenv was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-07 15:48:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL printenv was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-07 15:48:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL environment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-07 15:48:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL environment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-07 15:48:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL envrc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-07 15:48:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL envrc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-07 15:48:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: printenv.tmp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: printenv.tmp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-07 15:48:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-07 15:48:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.list ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.list ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.prod.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.prod.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.test.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.test.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL printenv was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-07 15:48:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL printenv was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-07 15:48:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL environment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-07 15:48:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL environment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-07 15:48:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL envrc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-07 15:48:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL envrc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-07 15:48:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: printenv.tmp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: printenv.tmp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.prod.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.prod.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.test.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.test.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 15:55:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 15:55:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 16:33:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 16:33:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 16:40:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-07 16:40:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-07 16:52:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-07 16:52:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-07 17:01:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/modules/framework/amp_conf/htdocs/admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 17:01:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/modules/framework/amp_conf/htdocs/admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 17:37:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 17:37:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 18:08:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 18:08:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 18:56:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 18:56:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 18:59:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webclient was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-07 18:59:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webclient was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-07 20:46:14 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-04-07 20:46:14 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-04-07 20:51:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 20:51:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 20:52:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 20:52:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 21:52:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 21:52:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 21:52:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 21:52:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:35:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:35:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/keys.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/keys.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/service_auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/service_auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/client_oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/client_oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/auth_settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/auth_settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/oauth/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/oauth/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/keys.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/keys.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vault/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vault/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dev_config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dev_config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/auth/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/auth/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/okta_oauth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/okta_oauth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/gcp_oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/gcp_oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security/keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security/keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/dev/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/dev/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/settings.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/settings.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/app/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/app/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/provider_config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/provider_config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/api_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/api_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/oauth.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/oauth.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/auth_config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/auth_config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/auth_override.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/auth_override.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.d/oauth.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.d/oauth.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/security.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/security.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/server_auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/server_auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/external_auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/external_auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app_config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app_config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: automation/oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: automation/oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/local.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/local.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/api_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/api_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/settings/auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/settings/auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security/auth_settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security/auth_settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/user/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/user/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: microservices/oauth/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: microservices/oauth/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security/oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security/oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/auth/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/auth/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/auth_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/auth_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/integration_auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/integration_auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vault/oauth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vault/oauth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/oauth_config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/oauth_config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/api/auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/api/auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/base.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/base.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/google.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/google.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/microsoft.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/microsoft.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/facebook_oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/facebook_oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/src/app/auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/src/app/auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/prod/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/prod/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/twitter_auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/twitter_auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/db.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/db.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/config/test_oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/config/test_oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/api.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/api.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/token_store.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/token_store.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/secrets/oauth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/secrets/oauth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/github.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/github.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/auth/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/auth/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/integration.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/integration.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security/api_settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security/api_settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/service_keys.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/service_keys.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/staging.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/staging.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spec/config/oauth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spec/config/oauth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/auth/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/auth/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/base.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/base.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/azure_auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/azure_auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 22:37:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 22:37:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 23:01:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 23:01:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 23:01:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-07 23:01:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-07 23:17:53 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-04-07 23:17:53 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-04-07 23:39:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-07 23:39:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-07 23:45:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-07 23:45:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}