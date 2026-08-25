<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2025-03-12 00:38:28 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-03-12 00:38:28 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-03-12 00:42:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 00:42:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 00:42:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: releases/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 00:42:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: releases/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 01:25:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 01:25:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 01:25:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth1.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 01:25:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth1.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 01:25:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sslvpnLogin.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 01:25:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sslvpnLogin.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 01:25:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/sonicos/tfa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-03-12 01:25:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/sonicos/tfa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 01:25:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/sonicos/auth was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-03-12 01:25:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/sonicos/auth was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 01:40:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 01:40:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 01:40:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 01:40:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 01:40:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 01:40:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 01:40:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 01:40:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 01:40:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 01:40:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 01:40:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 01:40:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 01:40:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 01:40:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 01:40:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 01:40:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 02:17:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 02:17:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 02:17:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 02:17:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 04:02:22 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-03-12 04:02:22 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-03-12 04:12:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 04:12:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 04:26:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/processing/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 04:26:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/processing/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 04:26:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/current/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 04:26:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/current/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 04:35:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/wlwmanifest.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 04:35:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/wlwmanifest.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 04:35:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 04:35:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 04:47:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL EYxF was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 04:47:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL EYxF was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 04:47:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 6Qmi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 04:47:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 6Qmi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 04:47:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aab8 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 04:47:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aab8 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 04:47:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery-3.3.1.slim.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 04:47:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery-3.3.1.slim.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 04:47:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aab9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 04:47:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aab9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 04:47:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery-3.3.2.slim.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 04:47:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery-3.3.2.slim.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 04:54:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 04:54:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 05:19:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 05:19:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 05:19:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 05:19:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 05:19:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/processing/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 05:19:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/processing/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 05:19:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_panel/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 05:19:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_panel/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 06:19:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 06:19:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 06:37:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: form.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 06:37:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: form.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 06:37:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 06:37:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 06:37:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 06:37:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 06:37:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 06:37:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 06:37:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 06:37:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 06:37:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 06:37:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 06:37:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: systembc/password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 06:37:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: systembc/password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 06:37:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 06:37:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 06:47:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL FD873AC4-CF86-4FED-84EC-4BD59C6F17A7 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 06:47:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL FD873AC4-CF86-4FED-84EC-4BD59C6F17A7 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 07:00:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 07:00:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 07:01:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/utils/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 07:01:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/utils/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 07:01:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: releases/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 07:01:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: releases/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 07:30:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 07:30:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 07:30:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 07:30:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 07:30:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 07:30:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 07:30:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 07:30:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 07:30:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 07:30:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 07:30:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 07:30:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 07:30:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 07:30:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 07:30:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 07:30:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 07:30:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 07:30:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 07:30:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 07:30:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 07:30:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 07:30:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 07:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 07:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 07:31:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 07:31:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 07:31:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 07:31:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 07:31:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 07:31:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 07:31:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 07:31:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 07:31:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 07:31:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 07:31:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 07:31:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 07:31:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 07:31:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 07:31:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 07:31:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 07:31:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 07:31:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 07:31:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 07:31:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 07:31:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 07:31:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 07:31:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 07:31:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 07:31:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 07:31:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 07:31:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 07:31:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 07:31:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 07:31:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 07:31:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 07:31:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 07:31:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 07:31:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 07:31:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 07:31:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 07:31:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 07:31:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 07:31:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 07:31:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 08:35:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL web/debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 08:35:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL web/debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 08:35:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 08:35:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 08:35:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 08:35:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 08:35:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 08:35:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 08:35:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 08:35:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 08:59:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 08:59:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 09:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 09:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 09:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 09:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 09:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 09:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 09:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 09:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 09:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 09:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 09:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 09:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 09:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 09:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 09:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 09:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 09:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 09:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 09:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 09:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 09:00:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 09:00:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 09:00:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 09:00:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 09:00:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 09:00:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 09:00:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 09:00:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 09:00:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 09:00:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 09:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 09:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 09:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 09:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 09:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 09:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 09:33:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 09:33:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 09:34:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sslvpnLogin.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 09:34:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sslvpnLogin.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 09:34:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth1.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 09:34:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth1.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 09:34:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 09:34:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 09:34:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/sonicos/tfa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-03-12 09:34:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/sonicos/auth was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-03-12 09:34:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/sonicos/tfa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 09:34:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/sonicos/auth was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 09:34:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wsman was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 09:34:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wsman was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 09:35:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dana-cached/hc/HostCheckerInstaller.osx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 09:35:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dana-cached/hc/HostCheckerInstaller.osx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 09:35:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dana-na/nc/nc_gina_ver.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 09:35:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dana-na/nc/nc_gina_ver.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 09:35:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/errorFE.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 09:35:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/errorFE.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 09:35:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 09:35:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 09:35:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 09:35:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 09:35:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL RDWeb was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 09:35:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL RDWeb was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 09:35:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: RDWeb/Pages/en-US/login.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 09:35:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: RDWeb/Pages/en-US/login.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 09:35:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Remote was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 09:35:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Remote was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 09:35:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 09:35:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 09:35:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/pods was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-03-12 09:35:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/pods was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 09:41:58 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-03-12 09:41:58 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-03-12 10:13:32 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-03-12 10:13:32 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-03-12 11:00:42 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-03-12 11:00:42 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-03-12 11:23:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 11:23:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 11:23:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 11:23:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 11:23:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blogs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 11:23:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blogs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 11:23:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 11:23:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 11:23:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 11:23:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 11:23:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: saas/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 11:23:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: saas/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 11:23:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 11:23:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 12:36:50 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-03-12 12:36:50 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-03-12 12:44:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 12:44:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 12:45:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 12:45:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 12:45:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 12:45:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 12:48:31 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-03-12 12:48:31 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-03-12 13:14:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpdesk/WebObjects/Helpdesk.woa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 13:14:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpdesk/WebObjects/Helpdesk.woa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 14:28:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 14:28:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 14:29:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 14:29:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 14:56:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 14:56:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 15:00:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 15:00:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 15:48:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 15:48:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 15:49:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ReportServer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 15:49:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ReportServer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 16:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 16:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 16:50:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 16:50:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 17:13:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 17:13:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 17:34:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 17:34:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 17:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 17:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 17:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 17:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 18:21:06 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-03-12 18:21:06 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-03-12 18:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 18:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 18:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/current/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 18:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/current/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 18:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging_environment/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 18:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging_environment/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 18:27:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: releases/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 18:27:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: releases/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 18:27:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 18:27:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:14:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL RDWeb/Pages was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 19:14:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL RDWeb/Pages was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 19:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:34:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:34:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:49:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:49:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:49:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:49:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:49:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo_test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:49:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo_test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:49:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info_test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:49:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info_test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:49:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:49:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:49:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:49:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:49:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:49:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:49:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpversion.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:49:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpversion.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:49:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpv.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:49:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpv.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:49:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phptest.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:49:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phptest.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:49:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:49:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:49:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:49:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:49:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:49:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:49:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infophp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:49:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infophp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:49:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info-php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:49:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info-php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:49:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info_php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:49:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info_php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:49:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: showinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:49:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: showinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:49:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: show-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:49:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: show-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:49:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: show_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:49:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: show_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:49:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: showphpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:49:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: showphpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:49:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: show-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:49:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: show-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:49:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: show_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:49:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: show_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:49:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: display-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:49:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: display-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:49:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: display_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:49:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: display_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:49:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: displayphpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:49:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: displayphpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: display-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: display-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: display_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: display_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: displayinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: displayinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:49:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: view-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:49:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: view-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:50:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: view_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:50:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: view_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:50:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: viewphpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:50:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: viewphpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:50:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: view-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:50:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: view-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:50:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: view_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:50:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: view_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:50:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: viewinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:50:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: viewinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:50:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:50:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:50:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:50:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:50:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:50:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:50:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:50:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:50:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:50:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:50:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverphpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:50:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverphpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:50:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:50:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:50:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:50:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:50:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: systeminfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:50:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: systeminfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:50:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sysinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:50:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sysinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:50:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sys-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:50:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sys-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:50:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sys_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:50:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sys_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:50:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:50:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:50:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:50:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:50:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:50:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:50:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:50:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:50:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:50:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:50:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:50:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:50:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:50:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:50:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testphp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:50:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testphp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:50:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: diagnose.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:50:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: diagnose.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:50:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: diag.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:50:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: diag.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:50:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: diagnostic.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:50:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: diagnostic.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:50:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: diagnostics.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:50:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: diagnostics.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:50:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:50:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:50:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:50:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:50:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server_status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:50:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server_status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:50:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverstatus.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:50:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverstatus.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:50:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system-status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:50:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system-status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:50:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system_status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:50:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system_status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:50:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: systemstatus.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:50:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: systemstatus.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:50:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:50:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:50:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:50:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:50:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpstatus.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:50:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpstatus.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:50:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: x.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:50:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: x.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:50:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xx.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:50:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xx.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:50:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xxx.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:50:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xxx.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:50:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:50:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:50:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aa.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:50:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aa.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:50:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aaa.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:50:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aaa.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:50:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: b.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:50:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: b.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:50:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bbb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:50:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bbb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:50:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:50:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:50:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ccc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:50:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ccc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:51:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 11.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:51:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 11.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:51:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 111.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:51:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 111.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:51:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:51:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:51:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 22.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:51:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 22.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:51:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 222.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:51:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 222.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:51:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:51:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:51:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 333.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:51:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 333.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:51:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asdf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:51:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asdf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:51:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qwerty.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:51:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qwerty.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:51:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zxcv.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:51:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zxcv.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:51:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:51:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:51:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:51:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:51:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:51:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:51:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:51:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:51:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:51:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:51:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:51:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:51:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:51:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:51:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:51:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:51:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: q.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:51:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: q.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:51:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: w.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:51:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: w.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:51:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: e.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:51:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: e.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:51:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: r.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:51:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: r.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:51:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: t.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:51:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: t.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:51:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: y.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:51:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: y.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:51:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: u.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:51:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: u.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:51:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: p.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:51:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: p.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:51:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: z.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:51:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: z.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:51:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: check.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:51:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: check.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:51:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: check-php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:51:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: check-php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: check_php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: check_php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpcheck.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpcheck.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-check.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-check.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_check.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_check.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: verification.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: verification.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: verify.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: verify.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-verification.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-verification.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_verification.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_verification.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpverification.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpverification.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpverify.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpverify.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-verify.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-verify.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_verify.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_verify.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: version.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: version.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ver.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ver.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpreleaseinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpreleaseinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: release.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: release.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: release-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: release-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: release_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: release_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: releaseinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: releaseinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-release.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-release.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_release.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_release.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phprelease.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phprelease.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: envinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: envinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbg.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbg.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: host.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: host.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: host-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: host-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: host_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: host_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hostinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hostinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: host-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: host-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: host_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: host_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hostphpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hostphpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hosting.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hosting.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hosting-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hosting-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hostinginfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hostinginfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: show.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: show.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: display.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: display.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: view.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: view.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test01.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test01.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test001.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test001.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test02.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test02.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test002.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test002.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test03.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test03.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test003.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test003.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info01.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info01.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info001.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info001.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info02.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info02.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info03.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info03.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info003.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info003.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo01.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo01.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo001.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo001.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo02.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo02.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo002.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo002.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo03.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo03.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo003.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo003.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: abc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: abc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: def.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: def.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ghi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ghi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:52:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jkl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:52:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jkl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:53:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mno.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:53:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mno.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:53:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pqr.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:53:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pqr.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:53:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stu.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:53:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stu.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:53:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vwx.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:53:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vwx.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:53:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xyz.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:53:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xyz.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:53:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 123.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:53:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 123.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:53:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 456.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:53:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 456.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:53:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 789.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:53:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 789.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:53:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 000.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:53:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 000.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 0.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 0.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 00.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 00.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:53:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 01.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:53:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 01.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:53:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 001.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:53:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 001.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:53:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 02.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:53:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 02.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:53:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 002.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:53:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 002.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:53:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 03.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:53:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 03.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:53:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 003.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:53:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 003.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:53:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:53:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:53:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:53:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:53:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:53:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:53:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:53:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:53:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo__.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:53:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo__.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:53:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo._.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:53:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo._.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:53:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info_.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:53:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info_.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:53:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info__.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:53:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info__.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:53:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info._.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:53:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info._.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:53:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo..php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:53:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo..php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:53:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info..php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:53:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info..php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:53:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:53:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:53:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:53:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:53:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inf0.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:53:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inf0.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:53:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1nfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:53:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1nfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:53:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ph1nfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:53:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ph1nfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:53:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ph1info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:53:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ph1info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:53:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phphph.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:53:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phphph.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:53:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infoinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:53:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infoinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 19:53:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfophpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 19:53:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfophpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 20:05:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passengers/how_it_works.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 20:05:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passengers/how_it_works.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 20:06:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/api/index/pay was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 20:06:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/api/index/pay was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 20:25:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 20:25:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 21:02:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 21:02:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 21:19:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 21:19:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 21:19:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 21:19:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 21:19:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 21:19:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 21:19:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 21:19:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 21:19:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 21:19:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 21:19:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 21:19:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 21:19:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 21:19:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 21:19:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 21:19:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 21:19:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 21:19:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 21:19:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 21:19:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 21:19:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 21:19:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 21:19:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 21:19:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 22:25:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ab2g was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 22:25:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ab2g was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 22:25:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ab2h was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 22:25:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ab2h was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 22:25:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alive.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 22:25:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alive.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 22:25:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 22:25:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 22:25:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 22:25:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 22:25:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL teorema505 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-12 22:25:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL teorema505 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-12 23:26:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 23:26:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 23:26:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 23:26:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 23:55:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 23:55:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-12 23:55:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-12 23:55:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}