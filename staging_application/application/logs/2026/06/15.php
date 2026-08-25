<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2026-06-15 00:24:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap_index.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 00:24:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap_index.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 01:27:07 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-15 01:27:07 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-15 01:28:13 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-15 01:28:13 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-15 01:50:06 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-15 01:50:06 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-15 02:14:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 02:14:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 02:54:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL WuEL was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 02:54:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL WuEL was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 02:54:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL a was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 02:54:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL a was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 02:54:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/file.ext ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 02:54:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/file.ext ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 02:54:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SiteLoader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 02:54:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SiteLoader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 02:54:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mPlayer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 02:54:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mPlayer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 02:58:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 02:58:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 02:58:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 02:58:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 02:58:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 02:58:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 02:58:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 02:58:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 02:58:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 02:58:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 02:58:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 02:58:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 02:58:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_whm/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 02:58:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_whm/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 02:58:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_whm/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 02:58:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_whm/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 02:58:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 02:58:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 02:58:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_whm/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 02:58:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_whm/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 02:58:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_whm/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 02:58:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_whm/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 03:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 03:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 03:23:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 03:23:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 03:23:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/ajax.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 03:23:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/ajax.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 03:23:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mbilling was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 03:23:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mbilling was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 03:28:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 03:28:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 03:34:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 03:34:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 03:34:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 03:34:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 03:34:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 03:34:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 03:34:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 03:34:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 03:34:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 03:34:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 03:34:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 03:34:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 03:34:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 03:34:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 03:34:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 03:34:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 03:34:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 03:34:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 03:34:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 03:34:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 03:34:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 03:34:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 03:34:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 03:34:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 03:34:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 03:34:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 03:34:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 03:34:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 03:34:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 03:34:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 03:34:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 03:34:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 03:34:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 03:34:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 03:34:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 03:34:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 03:34:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 03:34:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 03:34:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 03:34:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 03:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 03:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 03:34:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 03:34:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 03:34:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 03:34:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 03:44:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 03:44:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 04:03:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 04:03:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 04:03:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 04:03:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 04:03:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 04:03:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 04:40:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 04:40:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 04:40:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 04:40:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 05:09:37 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-15 05:09:37 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-15 05:22:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 05:22:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 05:22:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 05:22:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 05:22:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 05:22:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 05:22:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 05:22:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 05:22:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 05:22:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 05:22:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 05:22:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 05:22:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/config/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 05:22:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/config/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 05:22:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 05:22:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 05:22:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 05:22:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 05:23:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 05:23:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 05:23:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 05:23:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 05:23:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 05:23:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 05:23:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 05:23:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 05:23:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-15 05:23:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 05:23:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 05:23:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 05:23:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/user/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 05:23:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/user/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 05:23:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 05:23:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 05:23:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/config/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 05:23:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/config/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 05:23:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 05:23:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 05:23:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 05:23:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 05:23:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 05:23:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 05:23:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-15 05:23:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 05:23:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/user/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 05:23:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/user/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 05:23:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 05:23:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 06:47:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 06:47:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 06:48:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 06:48:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 08:16:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL portal/redlion was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 08:16:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL portal/redlion was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 08:36:10 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-15 08:36:10 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-15 08:56:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 08:56:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 08:56:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 08:56:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 08:56:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 08:56:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 08:56:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 08:56:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 08:56:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_whm/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 08:56:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_whm/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 08:56:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_whm/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 08:56:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_whm/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 10:45:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 10:45:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 10:45:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 10:45:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 10:45:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 10:45:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 10:45:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 10:45:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 10:45:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 10:45:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 10:45:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 10:45:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 10:45:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 10:45:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 10:45:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 10:45:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 10:45:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 10:45:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 10:45:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 10:45:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 10:45:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 10:45:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 10:45:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 10:45:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 10:45:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 10:45:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 10:45:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 10:45:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 10:45:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 10:45:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 10:45:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 10:45:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 10:45:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 10:45:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 10:45:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 10:45:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 10:45:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 10:45:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 10:45:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 10:45:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 10:45:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 10:45:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 10:45:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 10:45:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 10:45:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 10:45:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 10:45:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 10:45:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 10:45:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 10:45:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 10:45:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 10:45:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 10:45:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 10:45:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 10:45:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 10:45:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 10:45:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 10:45:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 10:45:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 10:45:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 10:45:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 10:45:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 10:45:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 10:45:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 10:56:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autodiscover/autodiscover.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 10:56:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autodiscover/autodiscover.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 11:50:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 11:50:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 11:52:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 11:52:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 11:53:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 11:53:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 12:15:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 12:15:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 12:15:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 12:15:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 13:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 13:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 13:00:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 13:00:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 13:20:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 13:20:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 13:33:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 13:33:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 13:33:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 13:33:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 13:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 13:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 13:39:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 13:39:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 13:40:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 13:40:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 13:40:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Dr0v was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 13:40:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Dr0v was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 13:52:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 13:52:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 13:52:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 13:52:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 13:52:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 13:52:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 13:52:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 13:52:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 13:52:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 13:52:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 13:52:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 13:52:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 13:52:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 13:52:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 13:52:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 13:52:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 13:52:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 13:52:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 13:52:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 13:52:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 13:52:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 13:52:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 13:52:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 13:52:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 13:52:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 13:52:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 13:52:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 13:52:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 13:52:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 13:52:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 13:52:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 13:52:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 13:52:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 13:52:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 13:52:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 13:52:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 13:52:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 13:52:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 13:52:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 13:52:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 13:52:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 13:52:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 13:52:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 13:52:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 13:52:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 13:52:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 13:52:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 13:52:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 13:52:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 13:52:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 13:52:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 13:52:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 13:52:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 13:52:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 13:54:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/gravitysmtp/v1/settings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 13:54:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/gravitysmtp/v1/settings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 13:54:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/gravitysmtp/v1/tests/mock-data was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 13:54:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/gravitysmtp/v1/tests/mock-data was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 13:54:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/gravitysmtp/v1/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 13:54:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/gravitysmtp/v1/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 13:54:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/gravitysmtp/v1/tests/mock-data was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 13:54:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/gravitysmtp/v1/tests/mock-data was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 13:54:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/wp/v2/settings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 13:54:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/wp/v2/settings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:00:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/viewportchecker.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:00:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/viewportchecker.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:00:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.lightbox_me.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:00:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.lightbox_me.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:00:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/wow.min.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:00:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/wow.min.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:00:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/smoothscroll.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:00:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/smoothscroll.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:00:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/bootstrap-timepicker.min.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:00:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/bootstrap-timepicker.min.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:00:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.fadethis.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:00:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.fadethis.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:00:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.isotope.min.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:00:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.isotope.min.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:00:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/validation/jquery.validate.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:00:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/validation/jquery.validate.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infra/terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infra/terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqldump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqldump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pg_dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pg_dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid-backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid-backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid-export.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid-export.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid-config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid-config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_export.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_export.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/sendgrid.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/sendgrid.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: exports/sendgrid.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: exports/sendgrid.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups/dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups/dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: exports/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: exports/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL internal/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL internal/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phptest.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phptest.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.override.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.override.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.staging.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.staging.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.production.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.production.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.dev.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.dev.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.local.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.local.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infrastructure/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infrastructure/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Dockerfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Dockerfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: devops/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: devops/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infra/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infra/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm/values.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm/values.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm/values-production.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm/values-production.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v1/actuator/heapdump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v1/actuator/heapdump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/actuator/configprops was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/actuator/configprops was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm/values.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm/values.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v1/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v1/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/actuator/heapdump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/actuator/heapdump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v1/actuator/configprops was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v1/actuator/configprops was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/azure.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/azure.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-adminsdk.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-adminsdk.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/actuator/heapdump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/actuator/heapdump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/actuator/configprops was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/actuator/configprops was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL app/heapdump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL app/heapdump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/configprops was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/configprops was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/httptrace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/httptrace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server/actuator/heapdump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server/actuator/heapdump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL configprops was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL configprops was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/heapdump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/heapdump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/logfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/logfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/dump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/dump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL heapdump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL heapdump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/sessions was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/sessions was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL internal/actuator/heapdump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL internal/actuator/heapdump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/threaddump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/threaddump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/auditevents was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/auditevents was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL profiler was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL profiler was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: parameters.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: parameters.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL threaddump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL threaddump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: parameters.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: parameters.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/actuator/configprops was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/actuator/configprops was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/heapdump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/heapdump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/actuator/logfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/actuator/logfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/actuator/heapdump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/actuator/heapdump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v2/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v2/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v2/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v2/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serviceaccount.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serviceaccount.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL logfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL logfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL app/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL app/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL app/actuator/heapdump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL app/actuator/heapdump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/configprops was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/configprops was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL app/actuator/logfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL app/actuator/logfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL app/actuator/configprops was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL app/actuator/configprops was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/open was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/open was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/cache/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/cache/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/parameters.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/parameters.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/web.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/web.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/base.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/base.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/classes/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/classes/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: META-INF/context.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: META-INF/context.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: .vscode/launch.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: .vscode/launch.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private_key.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private_key.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: .vscode/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: .vscode/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL id_rsa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL id_rsa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/sendgrid.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/sendgrid.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: trace.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: trace.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/gcp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/gcp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: .vscode/tasks.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: .vscode/tasks.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_helper.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_helper.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_config.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_config.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL jenkins/Jenkinsfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL jenkins/Jenkinsfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/application/config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/application/config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Jenkinsfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Jenkinsfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/production.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/production.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/sendgrid.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/sendgrid.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/local.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/local.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bitbucket-pipelines.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bitbucket-pipelines.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/application.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/application.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure-pipelines.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure-pipelines.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/app.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/app.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/sendgrid.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/sendgrid.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/sendgrid.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/sendgrid.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/sendgrid.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/sendgrid.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email/sendgrid.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email/sendgrid.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/sendgrid.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/sendgrid.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid-config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid-config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cache.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cache.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/context.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/context.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:04:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:04:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:08:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:08:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uat/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uat/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid/.env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid/.env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email/sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email/sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: release/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: release/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:08:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/auth/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:08:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/auth/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:11:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:11:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:11:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:11:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:11:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:11:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:11:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:11:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:18:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:18:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:18:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:18:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:18:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:18:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:18:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:18:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:18:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:18:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:18:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:18:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:18:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:18:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:18:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:18:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:18:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:18:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:18:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:18:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:18:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:18:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:18:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:18:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:18:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:18:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:18:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:18:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:18:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:18:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:18:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:18:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:18:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:18:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:18:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:18:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:18:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:18:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:18:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:18:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:18:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:18:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:18:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:18:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:18:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:18:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:18:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:18:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:18:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:18:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:18:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:18:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:18:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:18:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:30:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:30:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:30:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:30:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:30:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:30:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:30:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:30:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:30:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:30:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:30:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:30:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:30:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:30:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:30:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:30:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:30:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:30:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:30:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:30:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:30:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:30:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:30:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:30:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:30:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:30:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:30:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:30:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:30:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:30:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:30:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:30:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:30:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:30:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:30:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:30:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:30:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:30:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:30:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:30:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:30:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:30:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:30:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:30:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:30:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:30:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:30:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:30:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:30:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:30:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:30:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:30:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:30:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:30:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:39:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.fadethis.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:39:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.fadethis.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:39:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/viewportchecker.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:39:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/viewportchecker.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:39:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/wow.min.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:39:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/wow.min.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:39:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/bootstrap-timepicker.min.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:39:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/bootstrap-timepicker.min.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:39:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.prettyPhoto.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:39:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.prettyPhoto.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:39:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/smoothscroll.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:39:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/smoothscroll.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:39:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/bootstrap3.7.min.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:39:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/bootstrap3.7.min.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:39:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/timepicker/jquery.timepicker.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:39:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/timepicker/jquery.timepicker.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:39:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.lightbox_me.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:39:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.lightbox_me.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:39:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/swiper.min.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:39:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/swiper.min.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:39:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/validation/jquery.validate.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:39:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/validation/jquery.validate.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:39:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/simpledatetimepicker/jquery.simple-dtpicker.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:39:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/simpledatetimepicker/jquery.simple-dtpicker.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:39:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.selectbox-0.2.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:39:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.selectbox-0.2.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:39:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/build/js/intlTelInput.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:39:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/build/js/intlTelInput.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:39:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.isotope.min.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:39:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.isotope.min.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:39:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery3.3.1.min.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:39:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery3.3.1.min.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:39:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/script.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:39:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/script.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:39:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/owl.carousel.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:39:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.prettyPhoto.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:39:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/owl.carousel.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:39:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.prettyPhoto.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:39:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.prettyPhoto.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:39:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.prettyPhoto.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:40:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/owl.carousel.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:40:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/owl.carousel.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:40:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/datepicker/jquery-ui.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 14:40:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/datepicker/jquery-ui.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 14:42:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/gravitysmtp/v1/tests/mock-data was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:42:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/gravitysmtp/v1/tests/mock-data was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:42:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/gravitysmtp/v1/settings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:42:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/gravitysmtp/v1/settings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:42:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/gravitysmtp/v1/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:42:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/gravitysmtp/v1/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:42:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/gravitysmtp/v1/tests/mock-data was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:42:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/gravitysmtp/v1/tests/mock-data was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 14:42:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/wp/v2/settings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 14:42:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/wp/v2/settings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/logfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:10:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/logfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/heapdump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:10:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/heapdump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/httptrace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:10:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/httptrace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:10:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/threaddump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:10:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/threaddump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:10:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/configprops was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:10:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/configprops was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:10:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/dump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:10:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/dump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/auditevents was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:10:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/auditevents was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL heapdump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:10:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL heapdump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/sessions was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:10:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/sessions was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:10:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:10:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL configprops was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:10:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL configprops was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:10:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL logfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:10:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL logfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL threaddump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL threaddump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/actuator/configprops was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/actuator/configprops was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/actuator/heapdump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/actuator/heapdump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/actuator/logfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/actuator/logfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/heapdump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/heapdump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL app/actuator/heapdump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL app/actuator/heapdump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL app/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL app/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v1/actuator/heapdump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v1/actuator/heapdump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL app/actuator/logfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL app/actuator/logfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL app/actuator/configprops was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL app/actuator/configprops was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/configprops was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/configprops was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL app/heapdump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL app/heapdump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v1/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v1/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v1/actuator/configprops was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v1/actuator/configprops was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/actuator/configprops was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/actuator/configprops was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/actuator/heapdump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/actuator/heapdump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups/dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups/dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/actuator/configprops was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/actuator/configprops was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/actuator/heapdump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/actuator/heapdump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: exports/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: exports/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server/actuator/heapdump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server/actuator/heapdump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL internal/actuator/heapdump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL internal/actuator/heapdump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL internal/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL internal/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serviceaccount.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serviceaccount.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: parameters.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: parameters.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: parameters.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: parameters.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phptest.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phptest.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/open was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/open was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL profiler was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL profiler was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/gcp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/gcp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/azure.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/azure.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v2/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v2/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v2/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v2/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infrastructure/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infrastructure/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infra/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infra/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: devops/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: devops/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm/values.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm/values.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm/values.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm/values.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pg_dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pg_dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqldump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqldump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid-backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid-backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid-config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid-config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_export.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_export.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: exports/sendgrid.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: exports/sendgrid.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.production.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.production.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/sendgrid.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/sendgrid.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid-export.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid-export.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-adminsdk.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-adminsdk.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infra/terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infra/terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.override.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.override.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.dev.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.dev.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.staging.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.staging.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm/values-production.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm/values-production.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Dockerfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Dockerfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/production.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/production.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/local.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/local.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/cache/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/cache/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/base.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/base.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/context.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/context.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/application/config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/application/config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bitbucket-pipelines.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bitbucket-pipelines.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/classes/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/classes/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure-pipelines.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure-pipelines.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/web.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/web.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/sendgrid.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/sendgrid.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_helper.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_helper.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_config.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_config.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/parameters.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/parameters.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/sendgrid.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/sendgrid.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cache.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cache.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/sendgrid.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/sendgrid.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: trace.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: trace.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.local.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.local.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/sendgrid.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/sendgrid.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Jenkinsfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/sendgrid.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/sendgrid.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: META-INF/context.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: META-INF/context.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: .vscode/tasks.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: .vscode/tasks.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: .vscode/launch.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: .vscode/launch.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Jenkinsfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/app.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/app.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL jenkins/Jenkinsfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL jenkins/Jenkinsfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/application.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/application.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: .vscode/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: .vscode/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email/sendgrid.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email/sendgrid.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/sendgrid.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/sendgrid.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL id_rsa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL id_rsa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private_key.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private_key.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid-config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid-config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:29:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:29:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:31:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:31:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:32:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pay was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:32:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pay was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uat/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uat/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: release/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: release/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/auth/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/auth/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid/.env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid/.env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email/sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email/sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:35:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:35:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:35:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:35:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:44:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mcp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:44:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mcp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:44:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sse was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:44:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sse was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:44:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:44:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:53:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:53:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:53:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:53:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:53:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:53:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:53:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:53:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:54:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:54:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:54:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: emby/web/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:54:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: emby/web/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:57:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:57:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:57:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:57:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:57:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:57:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:57:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:57:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:57:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_whm/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:57:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_whm/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:57:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_cpanel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:57:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_cpanel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:57:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:57:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:57:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:57:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:57:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:57:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:57:29 --- ERROR: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH/classes/controller/api.php [ 50 ]
2026-06-15 15:57:29 --- STRACE: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH/classes/controller/api.php [ 50 ]
--
#0 /var/www/html/application/classes/controller/api.php(50): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 50, Array)
#1 [internal function]: Controller_Api->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Api))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-06-15 15:57:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-15 15:57:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:57:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphql/api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:57:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphql/api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:57:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/gql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-15 15:57:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/gql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:57:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:57:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:57:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:57:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:57:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:57:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:57:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:57:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:57:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:57:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:57:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: trace.axd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 15:57:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: trace.axd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 15:57:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:57:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 15:57:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 15:57:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 16:13:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/hellopress/wp_filemanager.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:13:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/hellopress/wp_filemanager.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:13:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: this_is_a_new_hello_world.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:13:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: this_is_a_new_hello_world.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:13:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-links-opml.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:13:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-links-opml.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:13:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a4.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:13:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a4.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:13:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/vx.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:13:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/vx.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:13:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: profile.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:13:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: profile.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:13:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ok.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:13:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ok.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:13:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aa.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:13:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aa.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:13:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/css/bolt.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:13:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/css/bolt.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:13:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: w3llstore.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:13:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: w3llstore.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:13:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: class-t.api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:13:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: class-t.api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:13:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 222.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:13:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 222.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:13:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-omao.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:13:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-omao.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:13:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-blog-header.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:13:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-blog-header.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:13:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cx.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:13:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cx.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:13:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aboute.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:13:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aboute.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:13:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-good.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:13:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-good.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:13:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wen.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:13:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wen.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:13:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: drykl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:13:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: drykl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:13:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: an.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:13:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: an.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:13:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: eetu.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:13:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: eetu.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:13:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-png.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:13:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-png.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:13:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: leaf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:13:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: leaf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:13:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugin-editor.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:13:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugin-editor.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:13:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new4.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:13:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new4.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:13:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wplogbak.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:13:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wplogbak.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:13:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cu.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:13:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cu.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:13:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bgymj.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:13:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bgymj.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:13:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mk.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:13:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mk.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:13:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:13:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:13:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: press.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:13:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: press.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:13:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hroxw.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:13:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hroxw.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:13:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bnm.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:13:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bnm.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:13:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcqoa.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:13:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcqoa.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-the.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-the.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp5.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp5.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xx.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xx.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asd.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asd.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 900.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 900.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ms.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ms.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tymn.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tymn.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-block.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-block.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws57.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws57.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 666.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 666.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: obfuscate.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: obfuscate.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mode.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mode.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: b.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: b.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws80.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws80.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tool.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tool.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws66.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws66.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-kikikoko.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-kikikoko.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: w2025.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: w2025.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-wlx.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-wlx.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ms-edit.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ms-edit.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mh.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mh.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gettest.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gettest.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autovirgi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autovirgi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: file3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: file3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: p-blog.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: p-blog.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: set.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: set.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws82.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws82.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nurseling.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nurseling.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yw5bi63u.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yw5bi63u.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dass.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dass.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: x123.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: x123.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bmi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bmi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: byypas.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: byypas.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: harvestry.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: harvestry.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/network/edit.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/network/edit.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grsiuk.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grsiuk.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws88.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws88.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tt.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tt.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rip.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rip.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sid3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sid3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-class-atom.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-class-atom.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugin-install.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugin-install.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ccs.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ccs.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-p2r3q9c8k4.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-p2r3q9c8k4.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adoms.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adoms.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Jcrop.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Jcrop.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jga.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jga.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mini.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mini.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amax.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amax.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 8573.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 8573.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 000.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 000.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gaza.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gaza.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aboutc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aboutc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: term.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: term.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kj.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kj.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Okxob.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Okxob.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xxx.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xxx.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hplfuns.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hplfuns.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/radio.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/radio.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-access.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-access.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: file61.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: file61.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: edit.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: edit.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a5.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a5.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: domains.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: domains.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fs.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fs.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jk.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jk.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: file6.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: file6.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-class-api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-class-api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 66.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 66.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-links-opml.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-links-opml.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gifclass.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gifclass.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dx.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dx.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/network/users.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/network/users.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-blogs.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-blogs.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: first.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: first.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: txets.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: txets.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: abc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: abc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zoo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zoo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: t.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: t.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: retu11.PhP7 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: retu11.PhP7 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 8.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 8.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws48.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws48.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bolt.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bolt.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admlo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admlo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 166.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 166.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:14:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alr.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:14:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alr.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:50:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:50:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:50:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:50:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:50:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:50:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:50:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:50:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:50:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:50:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:50:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:50:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:50:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:50:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:50:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:50:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:50:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:50:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:50:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:50:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:50:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:50:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:50:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:50:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:50:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:50:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:50:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:50:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:50:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:50:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:50:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:50:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:50:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:50:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:50:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:50:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:50:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:50:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:50:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:50:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:50:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:50:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:50:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:50:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:50:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:50:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:50:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:50:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:50:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:50:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:50:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:50:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:50:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:50:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 16:51:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 16:51:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 17:03:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 17:03:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 17:03:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 2zyk9hzaly6ra was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 17:03:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 2zyk9hzaly6ra was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 17:05:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 17:05:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 17:12:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 17:12:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 17:12:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 17:12:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 17:12:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 17:12:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 17:12:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 17:12:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 17:50:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 17:50:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 17:50:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 17:50:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 17:50:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 17:50:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 17:50:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 17:50:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 17:50:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 17:50:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 17:50:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 17:50:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 17:50:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 17:50:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 17:50:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 17:50:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 17:50:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 17:50:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 17:50:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 17:50:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 17:50:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 17:50:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 17:50:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 17:50:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 17:50:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 17:50:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 17:50:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 17:50:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 17:50:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 17:50:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 17:50:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 17:50:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 17:50:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 17:50:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 17:50:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 17:50:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 17:50:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 17:50:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 17:50:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 17:50:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 17:50:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 17:50:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 17:50:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 17:50:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 17:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 17:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 17:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 17:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 17:50:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 17:50:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 17:50:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 17:50:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 17:50:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 17:50:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 17:50:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 17:50:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 17:50:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 17:50:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 17:50:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 17:50:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 17:50:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 17:50:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 17:50:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 17:50:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 18:06:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 18:06:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 18:25:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 18:25:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 18:36:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 18:36:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 18:36:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 18:36:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 18:36:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 18:36:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 18:36:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 18:36:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 18:36:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 18:36:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 18:36:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 18:36:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 18:36:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 18:36:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 18:36:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 18:36:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 18:36:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 18:36:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 18:36:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 18:36:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 18:36:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 18:36:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 18:36:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 18:36:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 18:36:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 18:36:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 18:36:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 18:36:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 18:36:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 18:36:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 18:36:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 18:36:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 18:36:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 18:36:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 18:36:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 18:36:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 18:36:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 18:36:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 18:36:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 18:36:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 18:36:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 18:36:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 18:36:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 18:36:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 18:36:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 18:36:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 18:36:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 18:36:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 18:36:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 18:36:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 18:36:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 18:36:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 18:36:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 18:36:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 18:46:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL goform/formJsonAjaxReq was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 18:46:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL goform/formJsonAjaxReq was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 18:46:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 18:46:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 19:09:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 19:09:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 19:18:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accs_data/login/data.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 19:18:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accs_data/login/data.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 19:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 19:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 19:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 19:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 19:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 19:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 19:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 19:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 19:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 19:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 19:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 19:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 19:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 19:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 19:27:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 19:27:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 19:27:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 19:27:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 19:27:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 19:27:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 19:27:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 19:27:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 19:27:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 19:27:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 19:27:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 19:27:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 19:27:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 19:27:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 19:27:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 19:27:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 19:59:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 19:59:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 19:59:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hm_8co7mzxd0o3ip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 19:59:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hm_8co7mzxd0o3ip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 20:25:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 20:25:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 20:25:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 20:25:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 20:25:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 20:25:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 20:25:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 20:25:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 20:25:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_whm/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 20:25:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_whm/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 20:25:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_cpanel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 20:25:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_cpanel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 20:25:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 20:25:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 20:25:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 20:25:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 20:25:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 20:25:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 20:25:51 --- ERROR: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH/classes/controller/api.php [ 50 ]
2026-06-15 20:25:51 --- STRACE: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH/classes/controller/api.php [ 50 ]
--
#0 /var/www/html/application/classes/controller/api.php(50): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 50, Array)
#1 [internal function]: Controller_Api->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Api))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-06-15 20:25:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-15 20:25:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 20:25:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphql/api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 20:25:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphql/api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 20:25:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/gql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-15 20:25:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/gql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 20:25:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 20:25:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 20:25:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 20:25:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 20:25:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 20:25:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 20:25:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 20:25:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 20:25:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 20:25:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 20:26:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: trace.axd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 20:26:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: trace.axd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 20:26:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 20:26:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 20:26:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 20:26:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 20:53:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 20:53:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 20:53:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mvwllrnsg4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 20:53:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mvwllrnsg4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 20:59:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rhn/websocket/minion/remote-commands was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 20:59:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rhn/websocket/minion/remote-commands was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 20:59:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 20:59:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 21:21:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 21:21:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 21:53:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 21:53:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 22:14:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 22:14:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 22:39:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 22:39:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 22:40:47 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-15 22:40:47 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-15 22:58:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL systembc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 22:58:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL systembc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 23:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:01:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:01:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:01:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:01:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:01:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repository/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:01:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repository/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:02:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/transparentpix.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:02:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/transparentpix.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:03:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemaps.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:03:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemaps.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:28:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mcp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 23:28:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mcp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 23:28:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sse was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-15 23:28:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sse was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-15 23:28:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:28:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/hellopress/wp_filemanager.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/hellopress/wp_filemanager.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: this_is_a_new_hello_world.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: this_is_a_new_hello_world.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/init.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/init.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aa.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aa.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmrlpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmrlpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: class.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: class.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: goods.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: goods.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: as.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: as.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 222.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 222.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-mail.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-mail.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminfuns.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminfuns.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php8.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php8.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ioxi-o.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ioxi-o.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: edit.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: edit.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sid3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sid3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 166.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 166.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-the.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-the.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CDX2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CDX2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: profile.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: profile.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws80.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws80.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a4.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a4.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: buy.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: buy.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lock360.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lock360.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: av.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: av.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xs.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xs.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xxa.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xxa.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index0.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index0.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-kz.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-kz.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 19.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 19.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 11.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 11.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: w.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: w.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws78.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws78.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xxx.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xxx.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a7.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a7.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: BDKR28WP.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: BDKR28WP.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: d.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: d.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xff.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xff.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xltt.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xltt.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: son.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: son.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: doc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: doc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xper1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xper1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tiny.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tiny.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: de.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: de.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1a.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1a.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sky.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sky.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: man.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: man.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ms-edit.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ms-edit.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 7.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 7.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mar.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mar.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: acp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: acp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zdd.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zdd.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: link.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: link.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sallu.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sallu.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aboute.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aboute.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: one.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: one.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tx79.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tx79.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-class.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-class.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 8.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 8.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: options.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: options.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: f5.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: f5.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alpha.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alpha.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: son1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: son1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ggb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ggb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ss.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ss.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rh.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rh.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 99.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 99.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: layout.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: layout.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 12.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 12.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fs.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fs.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aaa.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aaa.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Ov-Simple1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Ov-Simple1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a5.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a5.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hplfuns.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hplfuns.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bolt.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bolt.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inputs.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inputs.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: file2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: file2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/function.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/function.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wk/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wk/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alfa.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alfa.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-theme.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-theme.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-file.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-file.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mah.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mah.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugins.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugins.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ini.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ini.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ca4.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ca4.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/includes/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/includes/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: init.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: init.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 100.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 100.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fm.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fm.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: z.ph ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: z.ph ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xroot7.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xroot7.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:50:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mini.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:50:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mini.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-15 23:57:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-15 23:57:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}