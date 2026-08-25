<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2025-03-13 00:06:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL portal/redlion was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 00:06:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL portal/redlion was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 00:13:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/cd/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:13:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/cd/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: doc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: doc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php3 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php3 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.cache ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.cache ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/traefik/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/traefik/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL root/infophp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 00:18:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL root/infophp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 00:18:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_old2014 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_old2014 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotpot-app-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotpot-app-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.8 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.8 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/.env_example ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/.env_example ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/default/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/default/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: help/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: help/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temanr9/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temanr9/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: p.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: p.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-dotenv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-dotenv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-03-13 00:18:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 00:18:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftpmaster/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftpmaster/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL auth/bigquery was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 00:18:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL auth/bigquery was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 00:18:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test4.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test4.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: films/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: films/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/config/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/config/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.sublime-project ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.sublime-project ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: linusadmin-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: linusadmin-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 00:18:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 00:18:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django_project_path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django_project_path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.cust ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.cust ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-node-mongo-redis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-node-mongo-redis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dodoswap-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dodoswap-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icon/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icon/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v11.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v11.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/couchdb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/couchdb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL bin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 00:18:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL bin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 00:18:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/twentyfourteen/archive.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/twentyfourteen/archive.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: export/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: export/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image_data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image_data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/phpmyadmin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/phpmyadmin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 09-managing-state/begin/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 09-managing-state/begin/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/mutual-fund-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/mutual-fund-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/github.com/gobuffalo/envy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/github.com/gobuffalo/envy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main_user/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main_user/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: roundcubemail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: roundcubemail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongodb/config/dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongodb/config/dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/sdl-first/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/sdl-first/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developerslv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developerslv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose/platform/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose/platform/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: restapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: restapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/proxy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-03-13 00:18:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/proxy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 00:18:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/log/nginx/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/log/nginx/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: protected/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: protected/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/logback.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/logback.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/plugin-qiankun/examples/app1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/plugin-qiankun/examples/app1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apache/i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apache/i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/proxy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-03-13 00:18:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/proxy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 00:18:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: agora/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: agora/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 00:18:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 00:18:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: results/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: results/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v2/proxy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-03-13 00:18:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v2/proxy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 00:18:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-secret.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-secret.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo/php-details.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo/php-details.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL computeMetadata/v1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 00:18:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL computeMetadata/v1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 00:18:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/github.com/subosito/gotenv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/github.com/subosito/gotenv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/default.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/default.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL testphpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 00:18:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL testphpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 00:18:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.old.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.old.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/did-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/did-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cronlab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cronlab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/proxy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-03-13 00:18:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/proxy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 00:18:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my_env/chakaash.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my_env/chakaash.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 00:18:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 00:18:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.csproj ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.csproj ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/fixtures/app_types/node/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/fixtures/app_types/node/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/infophp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/infophp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awstats/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awstats/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_info2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_info2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redis-*.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redis-*.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL etc/apache2/mods-enabled was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 00:18:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL etc/apache2/mods-enabled was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 00:18:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pictures/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pictures/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/objects/codes.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/objects/codes.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL information was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 00:18:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL information was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 00:18:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL bin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 00:18:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL bin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 00:18:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: downloads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: downloads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 00:18:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 00:18:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/integration/env-config/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/integration/env-config/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oldsanta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oldsanta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temanr10/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temanr10/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/empty-values/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/empty-values/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dep.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dep.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: enviroments/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: enviroments/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application-dev.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application-dev.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpsysinfo/phpsysinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpsysinfo/phpsysinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/internal/api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-03-13 00:18:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/internal/api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 00:18:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.phpd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.phpd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 00:18:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 00:18:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Nuke.App.Ui/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Nuke.App.Ui/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL latest/user-data was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 00:18:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL latest/user-data was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 00:18:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rust-backend/dao/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rust-backend/dao/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: engine/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: engine/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: collab-connect-web-application/server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: collab-connect-web-application/server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: websocket/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: websocket/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/plugin-qiankun/examples/app2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/plugin-qiankun/examples/app2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch6-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch6-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sources/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sources/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.c ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.c ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/nginx/snippets/self-signed-example.com.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/nginx/snippets/self-signed-example.com.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: next/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: next/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/development.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/development.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_phpinfo3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_phpinfo3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.swp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.swp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-cloud-sdk/lib/googlecloudsdk/gcloud.pyo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-cloud-sdk/lib/googlecloudsdk/gcloud.pyo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/rediscommander/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/rediscommander/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.sample ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.sample ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gists/cache/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gists/cache/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/log/cloud-init-output.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/log/cloud-init-output.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:18:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:18:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:19:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rasax/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:19:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rasax/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:19:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:19:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:19:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/development.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:19:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/development.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:19:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.b ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:19:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.b ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:19:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:19:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:19:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:19:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:19:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL latest/meta-data was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 00:19:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL latest/meta-data was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 00:19:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL php-info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 00:19:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL php-info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 00:19:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:19:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:19:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/server_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:19:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/server_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:19:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:19:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:19:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/named.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:19:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/named.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:19:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.backup.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:19:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.backup.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:19:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL latest/meta-data/iam/security-credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 00:19:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL latest/meta-data/iam/security-credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 00:19:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:19:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:19:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php-original ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:19:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php-original ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:19:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-03-13 00:19:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 00:19:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/drupal-test/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:19:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/drupal-test/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:19:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:19:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:19:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 00:19:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 00:19:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my_env/palash.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:19:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my_env/palash.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:19:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:19:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:19:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __tests__/test-become/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:19:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __tests__/test-become/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:19:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:19:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:19:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_new ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:19:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_new ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:50:28 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-03-13 00:50:28 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-03-13 00:59:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sslvpn_logon.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:59:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sslvpn_logon.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 00:59:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logon.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 00:59:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logon.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 01:14:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/utils/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 01:14:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/utils/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 01:14:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 01:14:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 01:14:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 01:14:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 01:14:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/frontend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 01:14:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/frontend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 01:14:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 01:14:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 01:14:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 01:14:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 01:14:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 01:14:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 01:14:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sandbox/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 01:14:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sandbox/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 01:14:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 01:14:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 01:14:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 01:14:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 01:14:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 01:14:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 01:14:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 01:14:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 02:02:09 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-03-13 02:02:09 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-03-13 02:16:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 02:16:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 03:14:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 03:14:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 03:25:43 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-03-13 03:25:43 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-03-13 03:26:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 03:26:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 03:30:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 03:30:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 03:46:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 03:46:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 03:46:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/js/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 03:46:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/js/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 03:46:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/utils/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 03:46:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/utils/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 03:46:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 03:46:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 04:37:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 04:37:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 05:00:23 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-03-13 05:00:23 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-03-13 05:07:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 05:07:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 05:07:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 05:07:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 05:10:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 05:10:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 05:13:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 05:13:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 05:15:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/login.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 05:15:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/login.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 05:17:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 05:17:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 05:20:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 05:20:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 05:34:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 05:34:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 05:38:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 05:38:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 06:14:47 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-03-13 06:14:47 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-03-13 06:18:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-03-13 06:18:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 06:24:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 06:24:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 06:24:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config_files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 06:24:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config_files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 06:24:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/private/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 06:24:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/private/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 06:47:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build_tool/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 06:47:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build_tool/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 06:54:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aaa9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 06:54:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aaa9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 06:54:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aab8 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 06:54:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aab8 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 07:40:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 07:40:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 07:40:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 07:40:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 07:40:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 07:40:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 08:04:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 08:04:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 08:04:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 08:04:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 08:04:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 08:04:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 08:04:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 08:04:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 08:04:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 08:04:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 08:04:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 08:04:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 08:04:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 08:04:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 08:04:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 08:04:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 08:04:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 08:04:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 08:04:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: events../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 08:04:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: events../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 08:04:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 08:04:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 08:24:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 08:24:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 08:24:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 08:24:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 09:06:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 09:06:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 09:06:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 09:06:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 09:06:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 09:06:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 09:06:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 09:06:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 09:06:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 09:06:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 09:06:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 09:06:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 09:06:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 09:06:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 09:06:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 09:06:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 09:06:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: events../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 09:06:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: events../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 09:06:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 09:06:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 09:19:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 09:19:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 09:19:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 09:19:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 09:31:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 09:31:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 09:58:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: form.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 09:58:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: form.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 09:58:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 09:58:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 09:58:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 09:58:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 09:58:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 09:58:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 09:58:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 09:58:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 09:58:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 09:58:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 09:58:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: systembc/password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 09:58:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: systembc/password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 09:58:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 09:58:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 10:18:14 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-03-13 10:18:14 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-03-13 10:22:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autodiscover/autodiscover.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 10:22:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autodiscover/autodiscover.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 10:24:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/x.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 10:24:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/x.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 10:32:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 10:32:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 10:32:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 10:32:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 10:51:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repo/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 10:51:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repo/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 10:51:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 10:51:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 10:51:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 10:51:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 10:54:11 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-03-13 10:54:11 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-03-13 10:54:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 10:54:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 12:24:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 12:24:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 13:03:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 13:03:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 13:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL GponForm/diag_Form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 13:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL GponForm/diag_Form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 14:24:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autodiscover/autodiscover.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 14:24:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autodiscover/autodiscover.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 14:28:11 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-03-13 14:28:11 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-03-13 14:54:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 14:54:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 14:54:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 14:54:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 14:54:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 14:54:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 14:54:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 14:54:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 14:54:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 14:54:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 14:54:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 14:54:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 14:54:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 14:54:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 15:53:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 15:53:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 16:14:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 16:14:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 16:31:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zabbix/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 16:31:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zabbix/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 16:31:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 16:31:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 16:31:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/historypage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 16:31:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/historypage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 16:31:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: license.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 16:31:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: license.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 16:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-json was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 16:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-json was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 16:32:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL WebInterface was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 16:32:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL WebInterface was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 16:32:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webfig was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 16:32:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webfig was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 16:32:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.do ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 16:32:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.do ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 16:33:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cf_scripts/scripts/ajax/ckeditor/ckeditor.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 16:33:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cf_scripts/scripts/ajax/ckeditor/ckeditor.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 16:33:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: OA_HTML/AppsLocalLogin.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 16:33:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: OA_HTML/AppsLocalLogin.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 16:33:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 16:33:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 16:33:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL identity was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 16:33:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL identity was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 16:33:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/NewWindow_2_all.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 16:33:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/NewWindow_2_all.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 16:33:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aspera/faspex was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 16:33:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aspera/faspex was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 16:33:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solr was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 16:33:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solr was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 16:33:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon-32x32.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 16:33:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon-32x32.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 16:33:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL partymgr/control/main was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 16:33:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL partymgr/control/main was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 16:33:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: showLogin.cc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 16:33:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: showLogin.cc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 16:34:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/main.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 16:34:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/main.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 16:34:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/session/properties was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-03-13 16:34:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/session/properties was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 16:34:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/authLogin.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 16:34:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/authLogin.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 16:34:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL xmldata was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 16:34:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL xmldata was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 16:34:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpdesk/WebObjects/Helpdesk.woa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 16:34:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpdesk/WebObjects/Helpdesk.woa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 16:34:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 16:34:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 16:34:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/PTZOptics_powerby.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 16:34:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/PTZOptics_powerby.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 16:34:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ext-js/app/common/zld_product_spec.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 16:34:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ext-js/app/common/zld_product_spec.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 16:34:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL internal_forms_authentication was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 16:34:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL internal_forms_authentication was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 16:34:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 16:34:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 16:34:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitecore/shell/sitecore.version.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 16:34:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitecore/shell/sitecore.version.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 16:35:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owncloud/status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 16:35:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owncloud/status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 16:35:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 16:35:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 16:35:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sugar_version.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 16:35:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sugar_version.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 16:35:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Telerik.Web.UI.WebResource.axd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 16:35:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Telerik.Web.UI.WebResource.axd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 16:57:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ReportServer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 16:57:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ReportServer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 17:44:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 17:44:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 17:44:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 17:44:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 18:49:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 18:49:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 19:20:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 19:20:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 19:33:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpdesk/WebObjects/Helpdesk.woa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 19:33:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpdesk/WebObjects/Helpdesk.woa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 19:47:36 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-03-13 19:47:36 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-03-13 19:53:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 19:53:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 19:54:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 19:54:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 19:59:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 19:59:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 19:59:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/db/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 19:59:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/db/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:06:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/phpunit.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:06:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/phpunit.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:19:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:19:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:23:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpdesk/WebObjects/Helpdesk.woa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:23:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpdesk/WebObjects/Helpdesk.woa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:37:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:37:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:37:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:37:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:37:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/constants.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:37:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/constants.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:37:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:37:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:37:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:37:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:37:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:37:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:37:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/security.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:37:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/security.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:37:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:37:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:37:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:37:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:37:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/storage.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:37:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/storage.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:37:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/master.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:37:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/master.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:37:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials.yml.enc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:37:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials.yml.enc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:37:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/secret_token.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:37:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/secret_token.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:37:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:37:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:37:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/uploads/wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:37:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/uploads/wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:37:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/mu-plugins/db-error.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:37:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/mu-plugins/db-error.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:38:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:38:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:38:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:38:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: LocalSettings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: LocalSettings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/default/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/default/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:38:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/default/services.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:38:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/default/services.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:38:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/default/default.settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:38:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/default/default.settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:38:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:38:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:38:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/defines.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:38:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/defines.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:38:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: includes/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:38:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: includes/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:38:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: includes/configure.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:38:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: includes/configure.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:38:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: includes/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:38:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: includes/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:38:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:38:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:38:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: protected/config/main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:38:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: protected/config/main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:38:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: protected/config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:38:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: protected/config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:38:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fuel/application/config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:38:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fuel/application/config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:38:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fuel/application/config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:38:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fuel/application/config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:38:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/configs/application.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:38:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/configs/application.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:38:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/configs/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:38:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/configs/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:38:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/configs/database.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:38:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/configs/database.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:38:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/local.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:38:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/local.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:38:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:38:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:38:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:38:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:38:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:38:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:38:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/components/com_config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:38:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/components/com_config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:38:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:38:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:38:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:38:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:38:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:38:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:38:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/db.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:38:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/db.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:38:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/composer.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:38:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/composer.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:38:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/composer.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:38:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/composer.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:38:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:38:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:38:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:38:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:38:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:38:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/config/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/config/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:38:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:38:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:38:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:38:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:38:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:38:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:38:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:38:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:38:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL symfony/config/secrets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 20:38:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL symfony/config/secrets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 20:38:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:38:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:38:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django/local_settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:38:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django/local_settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:38:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask/config.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:38:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask/config.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:38:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask/instance/config.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:38:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask/instance/config.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:38:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:38:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:39:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rails/config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:39:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rails/config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:39:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rails/config/master.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:39:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rails/config/master.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:39:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rails/config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:39:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rails/config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:39:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rails/config/storage.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:39:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rails/config/storage.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:39:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spring/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:39:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spring/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:39:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spring/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:39:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spring/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:39:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spring/bootstrap.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:39:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spring/bootstrap.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:39:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spring/bootstrap.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:39:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spring/bootstrap.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:39:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: express/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:39:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: express/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:39:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: express/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:39:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: express/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nuxt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nuxt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nuxt/nuxt.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nuxt/nuxt.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: angular/environment.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: angular/environment.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:39:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: angular/environment.prod.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:39:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: angular/environment.prod.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:39:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: react/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:39:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: react/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: react/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: react/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:39:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: electron/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:39:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: electron/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:39:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:39:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:39:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:39:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:39:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aspnet/web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:39:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aspnet/web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:39:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aspnet/appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:39:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aspnet/appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:39:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aspnet/appsettings.development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:39:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aspnet/appsettings.development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:39:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dotnet/web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:39:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dotnet/web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:39:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dotnet/appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:39:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dotnet/appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:39:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dotnet/appsettings.production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:39:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dotnet/appsettings.production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:39:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cake.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:39:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cake.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:39:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/core.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:39:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/core.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:39:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/bootstrap.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:39:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/bootstrap.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:39:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/application/config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:39:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/application/config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:39:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/application/config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:39:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/application/config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:39:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/database/drivers/mysql/mysql_driver.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:39:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/database/drivers/mysql/mysql_driver.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/database/drivers/mysqli/mysqli_driver.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/database/drivers/mysqli/mysqli_driver.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:39:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: concrete/config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:39:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: concrete/config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:40:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: concrete/config/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:40:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: concrete/config/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:40:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:40:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:40:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:40:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:40:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/conf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:40:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/conf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:40:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/inc/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:40:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/inc/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:40:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/includes/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:40:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/includes/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:40:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:40:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:40:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:40:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:40:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PMA/config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:40:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PMA/config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:40:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:40:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:40:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: typo3conf/LocalConfiguration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:40:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: typo3conf/LocalConfiguration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:40:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: typo3conf/AdditionalConfiguration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:40:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: typo3conf/AdditionalConfiguration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:40:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: craft/config/db.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:40:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: craft/config/db.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:40:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: craft/config/general.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:40:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: craft/config/general.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:40:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: suitecrm/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:40:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: suitecrm/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:40:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: suitecrm/config_override.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:40:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: suitecrm/config_override.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:40:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oscommerce/includes/configure.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:40:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oscommerce/includes/configure.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:40:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:40:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:40:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:40:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:40:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:40:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:40:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:40:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:40:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/queue.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:40:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/queue.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:40:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cache.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:40:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cache.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:40:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/session.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:40:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/session.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:40:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/conf/server.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:40:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/conf/server.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:40:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/conf/context.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:40:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/conf/context.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:40:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tomcat/conf/server.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:40:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tomcat/conf/server.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:40:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tomcat/conf/context.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:40:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tomcat/conf/context.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:40:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apache/conf/httpd.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:40:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apache/conf/httpd.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:40:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx/conf/nginx.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:40:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx/conf/nginx.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:40:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL nginx/sites-available/default was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 20:40:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL nginx/sites-available/default was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 20:40:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/nginx/nginx.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:40:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/nginx/nginx.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:40:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/apache2/apache2.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:40:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/apache2/apache2.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:40:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/httpd/conf/httpd.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:40:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/httpd/conf/httpd.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:40:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/my.cnf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:40:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/my.cnf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:40:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/mysql/my.cnf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:40:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/mysql/my.cnf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:40:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/php/php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:40:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/php/php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:40:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:40:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:40:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/7.4/php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:40:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/7.4/php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:40:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/7.3/php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:40:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/7.3/php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:40:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/7.2/php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:40:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/7.2/php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:40:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/7.1/php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:40:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/7.1/php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:40:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/7.0/php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:40:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/7.0/php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:40:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:40:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:40:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cPanel/php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:40:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cPanel/php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:40:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: joomla/configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:40:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: joomla/configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:41:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: magento/app/etc/local.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:41:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: magento/app/etc/local.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:41:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: magento/app/etc/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:41:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: magento/app/etc/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:41:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: drupal/sites/default/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:41:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: drupal/sites/default/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:41:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:41:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:41:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: opencart/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:41:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: opencart/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:41:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prestashop/config/settings.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:41:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prestashop/config/settings.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:41:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zencart/includes/configure.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:41:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zencart/includes/configure.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:41:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: eshop/includes/configure.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:41:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: eshop/includes/configure.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:41:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: woocommerce/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:41:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: woocommerce/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:41:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopify/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:41:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopify/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:41:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopware/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:41:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopware/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:41:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django/settings/base.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:41:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django/settings/base.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:41:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django/settings/dev.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:41:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django/settings/dev.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:41:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django/settings/prod.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:41:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django/settings/prod.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:41:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django/settings/local.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:41:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django/settings/local.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:41:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask/settings/development.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:41:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask/settings/development.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:41:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask/settings/production.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:41:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask/settings/production.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:41:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rails/config/environment.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:41:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rails/config/environment.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:41:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rails/config/environments/development.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:41:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rails/config/environments/development.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:41:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spring/application-dev.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:41:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spring/application-dev.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spring/application-prod.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spring/application-prod.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spring/application-test.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spring/application-test.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:41:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/cache/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:41:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/cache/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:41:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL storage/framework/cache/data was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 20:41:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL storage/framework/cache/data was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 20:41:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL var/cache/dev was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 20:41:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL var/cache/dev was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 20:41:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL var/cache/prod was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 20:41:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL var/cache/prod was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 20:41:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/log/dev.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:41:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/log/dev.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:41:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/log/prod.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:41:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/log/prod.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:41:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/log/test.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:41:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/log/test.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:41:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL bin/console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 20:41:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL bin/console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 20:41:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL artisan was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 20:41:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL artisan was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 20:41:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL yii was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 20:41:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL yii was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 20:41:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:41:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:41:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:41:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:41:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:41:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:41:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:41:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:41:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:41:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:41:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:41:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 20:41:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 20:41:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:18:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:18:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:18:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:18:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:19:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 21:19:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 21:19:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:19:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:19:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:19:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:19:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:19:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:19:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:19:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:19:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:19:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:19:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:19:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:19:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:19:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:19:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:19:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:19:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:19:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:19:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:19:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:19:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:19:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:19:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:19:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:19:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:19:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:19:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:19:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:19:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:19:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:19:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:19:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:19:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:19:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:20:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:20:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:20:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:20:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:20:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:20:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:20:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:20:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:20:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:20:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:20:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:20:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:20:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:20:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:20:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:20:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:20:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:20:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:20:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:20:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:20:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:20:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:20:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:20:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:20:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i/phpinfo.php  ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:20:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i/phpinfo.php  ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:20:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:20:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:20:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: x.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:20:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: x.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:20:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xx.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:20:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xx.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:20:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xxx.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:20:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xxx.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:20:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:20:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:20:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:20:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:20:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:20:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:20:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:20:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:20:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: b.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:20:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: b.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:20:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: c.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:20:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: c.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:21:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: d.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:21:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: d.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:21:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: e.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:21:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: e.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:21:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aaa.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:21:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aaa.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:21:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:21:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:21:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:21:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:21:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:21:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:21:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infophp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:21:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infophp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:21:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:21:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:21:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:21:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:21:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:21:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tz.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tz.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:21:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:21:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:21:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:21:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:21:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:21:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:21:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testphp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:21:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testphp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:21:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:21:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:21:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: p.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:21:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: p.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:22:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:22:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:22:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:22:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:22:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpversion.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:22:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpversion.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:22:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:22:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:22:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:22:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:22:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:22:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:22:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:22:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:22:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:22:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:22:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: version.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:22:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: version.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:22:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:22:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:22:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:22:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:22:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:22:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:22:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/system/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:22:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/system/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:22:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/system/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:22:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/system/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:22:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:22:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:22:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _admin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:22:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _admin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:22:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:22:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:22:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:22:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:22:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:22:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:22:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:22:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:22:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:22:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:22:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:22:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:23:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:23:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:23:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:23:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:23:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:23:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:23:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:23:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:23:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:23:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:23:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:23:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:23:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:23:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:23:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:23:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:23:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:23:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:23:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:23:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:23:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:23:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:23:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:23:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:23:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:23:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:23:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: include/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:23:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: include/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:23:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: include/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:23:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: include/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:23:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: includes/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:23:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: includes/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:23:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: includes/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:23:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: includes/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:23:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:23:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:23:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:23:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:24:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:24:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:24:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:24:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:24:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: module/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:24:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: module/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:24:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: module/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:24:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: module/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:24:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:24:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:24:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:24:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:24:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tool/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:24:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tool/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:24:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tool/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:24:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tool/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:24:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utility/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:24:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utility/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:24:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utility/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:24:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utility/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:24:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: util/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:24:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: util/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:24:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: util/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:24:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: util/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:24:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utilities/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:24:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utilities/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:24:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utilities/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:24:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utilities/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:24:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utilities/phpversion.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:24:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utilities/phpversion.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:24:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:24:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:24:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:24:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:24:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: help/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:24:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: help/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:24:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: help/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:24:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: help/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:24:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:24:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:25:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:25:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:25:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pub/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:25:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pub/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:25:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pub/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:25:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pub/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:25:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:25:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:25:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:25:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:25:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:25:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:25:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: check.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:25:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: check.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:25:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: health.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:25:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: health.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: healthcheck.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: healthcheck.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:25:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: health-check.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:25:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: health-check.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:25:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: diagnostic.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:25:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: diagnostic.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:25:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: diagnostics.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:25:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: diagnostics.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:25:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:25:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:25:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:25:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:25:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:25:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:25:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:25:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:25:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:25:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:25:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db-test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:25:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db-test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:25:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:25:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:25:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:25:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:25:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database-test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:25:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database-test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:25:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:25:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:25:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:25:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:26:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql-test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:26:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql-test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:26:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:26:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:26:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:26:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:26:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql-test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:26:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql-test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:26:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: script/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:26:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: script/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:26:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: script/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:26:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: script/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:26:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:26:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:26:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:26:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:26:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:26:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:26:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:26:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:26:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:26:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:26:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:26:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:26:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:26:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:26:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:26:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:26:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:26:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:26:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:26:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:26:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:26:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:26:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:26:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:26:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:26:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:27:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:27:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:27:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:27:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:27:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:27:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:27:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:27:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:27:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:27:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:27:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:27:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:27:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: file/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:27:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: file/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:27:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: file/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:27:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: file/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:27:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:27:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:27:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:27:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:27:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:27:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archive/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archive/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archive/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archive/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:27:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archives/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:27:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archives/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:27:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archives/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:27:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archives/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:27:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:27:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:27:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:27:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:27:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old_site/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:27:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old_site/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:27:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old_site/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:27:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old_site/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old-site/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old-site/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:28:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old-site/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:28:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old-site/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:28:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: newsite/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:28:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: newsite/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:28:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: newsite/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:28:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: newsite/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:28:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new-site/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:28:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new-site/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:28:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new-site/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:28:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new-site/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:28:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site-new/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:28:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site-new/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:28:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site-new/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:28:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site-new/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:28:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site-old/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:28:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site-old/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:28:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site-old/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:28:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site-old/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:28:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:28:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:28:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:28:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:28:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:28:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:28:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:28:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev-site/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev-site/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:28:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev-site/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:28:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev-site/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:28:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:28:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:28:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:28:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:28:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:28:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:28:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:28:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:28:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:28:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:28:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:28:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:28:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:28:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:28:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:28:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:28:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:28:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:29:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:29:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:29:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:29:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:29:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:29:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:29:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:29:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:29:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rest/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:29:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rest/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:29:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rest/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:29:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rest/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:29:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: external/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:29:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: external/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:29:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: external/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:29:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: external/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:29:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:29:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:29:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:29:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:29:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:29:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:29:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:29:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:29:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:29:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:29:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:29:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:29:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logout/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:29:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logout/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:29:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logout/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:29:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logout/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:29:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:29:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:29:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:29:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:29:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:29:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:29:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: account/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:29:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: account/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:29:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: account/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:29:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: account/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:30:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accounts/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:30:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accounts/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:30:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accounts/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:30:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accounts/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:30:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: member/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:30:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: member/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:30:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: member/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:30:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: member/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:30:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: members/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:30:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: members/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:30:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: members/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:30:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: members/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:30:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: profile/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:30:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: profile/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:30:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: profile/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:30:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: profile/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:30:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: profiles/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:30:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: profiles/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:30:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: profiles/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:30:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: profiles/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:30:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: register/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:30:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: register/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:30:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: register/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:30:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: register/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:30:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: signup/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:30:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: signup/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:30:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: signup/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:30:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: signup/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:30:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: signin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:30:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: signin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:30:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: signin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:30:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: signin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:30:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:30:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:30:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:30:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:30:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: authentication/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:30:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: authentication/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:30:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: authentication/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:30:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: authentication/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:30:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: forum/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:30:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: forum/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:30:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: forum/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:30:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: forum/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:30:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: forums/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:30:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: forums/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:31:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: forums/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:31:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: forums/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:31:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blogs/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:31:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blogs/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:31:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blogs/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:31:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blogs/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:31:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: article/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:31:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: article/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:31:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: article/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:31:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: article/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:31:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: articles/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:31:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: articles/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:31:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: articles/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:31:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: articles/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:31:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:31:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:31:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:31:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:31:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: newsletter/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:31:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: newsletter/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:31:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: newsletter/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:31:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: newsletter/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:31:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: community/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:31:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: community/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:31:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: community/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:31:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: community/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:31:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:31:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:31:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:31:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:31:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:31:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:32:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:32:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:32:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:32:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:32:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:32:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:32:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:32:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:32:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: search/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:32:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: search/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: search/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: search/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:32:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:32:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:32:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:32:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:32:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: support/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:32:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: support/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:32:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: support/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:32:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: support/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:32:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: faq/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:32:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: faq/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:32:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: faq/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:32:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: faq/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:32:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:32:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:32:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:32:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:32:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: store/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:32:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: store/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:32:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: store/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:32:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: store/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:32:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:32:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:32:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:32:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cart/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cart/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:32:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cart/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:32:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cart/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:33:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkout/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:33:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkout/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:33:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkout/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:33:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkout/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:33:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: order/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:33:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: order/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:33:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: order/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:33:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: order/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:33:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: orders/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:33:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: orders/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:33:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: orders/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:33:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: orders/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:33:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:33:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:33:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: products/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:33:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: products/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:33:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: products/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:33:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: products/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:33:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: event/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:33:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: event/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:33:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: event/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:33:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: event/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:33:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: events/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:33:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: events/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: events/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: events/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:33:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: calendar/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:33:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: calendar/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:33:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: calendar/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:33:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: calendar/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:33:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gallery/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:33:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gallery/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:33:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gallery/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:33:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gallery/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:33:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: galleries/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:33:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: galleries/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:34:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: galleries/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:34:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: galleries/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:34:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: photo/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:34:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: photo/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:34:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: photo/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:34:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: photo/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:34:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: photos/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:34:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: photos/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:34:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: photos/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:34:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: photos/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:34:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:34:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:34:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:34:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:34:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: video/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:34:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: video/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:34:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: video/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:34:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: video/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:34:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: videos/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:34:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: videos/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:34:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: videos/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:34:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: videos/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:34:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: audio/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:34:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: audio/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:34:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: audio/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:34:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: audio/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:34:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: audios/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:34:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: audios/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:34:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: audios/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:34:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: audios/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:34:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:34:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:34:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:34:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:34:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: downloads/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:34:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: downloads/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:34:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: downloads/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:34:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: downloads/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:34:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: doc/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:34:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: doc/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:34:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: doc/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:34:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: doc/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:34:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:34:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:34:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:34:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:35:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: document/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:35:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: document/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:35:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: document/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:35:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: document/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:35:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: documents/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:35:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: documents/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:35:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: documents/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:35:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: documents/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:35:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pdf/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:35:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pdf/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:35:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pdf/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:35:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pdf/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:35:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pdfs/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:35:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pdfs/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:35:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pdfs/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:35:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pdfs/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:35:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xml/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:35:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xml/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:35:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xml/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:35:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xml/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:35:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: json/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:35:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: json/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:35:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: json/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:35:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: json/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:35:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feed/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:35:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feed/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:35:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feed/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:35:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feed/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feeds/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feeds/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feeds/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feeds/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:35:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rss/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:35:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rss/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:35:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rss/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:35:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rss/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:35:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: atom/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:35:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: atom/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:35:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: atom/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:35:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: atom/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:35:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:35:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:36:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:36:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:36:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemaps/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:36:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemaps/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:36:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemaps/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:36:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemaps/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:36:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stats/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:36:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stats/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:36:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stats/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:36:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stats/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:36:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: statistics/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:36:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: statistics/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:36:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: statistics/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:36:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: statistics/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:36:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stat/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:36:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stat/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:36:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stat/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:36:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stat/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:36:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: report/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:36:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: report/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:36:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: report/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:36:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: report/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reports/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reports/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:36:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reports/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:36:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reports/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:36:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: analytics/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:36:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: analytics/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:36:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: analytics/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:36:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: analytics/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:36:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: analytic/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:36:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: analytic/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:36:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: analytic/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:36:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: analytic/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:36:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chart/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:36:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chart/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:36:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chart/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:36:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chart/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:36:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: charts/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:36:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: charts/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:36:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: charts/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:36:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: charts/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:37:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: graph/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:37:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: graph/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:37:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: graph/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:37:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: graph/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:37:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: graphs/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:37:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: graphs/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:37:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: graphs/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:37:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: graphs/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:37:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: monitoring/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:37:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: monitoring/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:37:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: monitoring/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:37:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: monitoring/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:37:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: monitor/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:37:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: monitor/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:37:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: monitor/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:37:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: monitor/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:37:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:37:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:37:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:37:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:37:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:37:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:37:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:37:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:37:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: update/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:37:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: update/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:37:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: update/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:37:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: update/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:37:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: updates/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:37:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: updates/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:37:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: updates/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:37:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: updates/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:37:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upgrade/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:37:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upgrade/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:37:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upgrade/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:37:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upgrade/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:37:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upgrades/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:37:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upgrades/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:37:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upgrades/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:37:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upgrades/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:38:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:38:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:38:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:38:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:38:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setting/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:38:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setting/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:38:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setting/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:38:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setting/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:38:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: option/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:38:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: option/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:38:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: option/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:38:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: option/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:38:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: options/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:38:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: options/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:38:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: options/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:38:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: options/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:38:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: preference/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:38:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: preference/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:38:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: preference/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:38:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: preference/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:38:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: preferences/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:38:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: preferences/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:38:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: preferences/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:38:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: preferences/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:38:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: locale/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:38:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: locale/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:38:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: locale/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:38:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: locale/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:38:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: language/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:38:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: language/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:38:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: language/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:38:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: language/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: languages/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: languages/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:38:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: languages/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:38:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: languages/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:38:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: translation/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:38:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: translation/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: translation/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: translation/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:38:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: translations/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:38:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: translations/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: translations/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:38:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: translations/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:38:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: theme/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:38:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: theme/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:38:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: theme/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:38:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: theme/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:38:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:38:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:39:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:39:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:39:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:39:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:39:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:39:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:39:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:39:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:39:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:39:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:39:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: layout/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:39:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: layout/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:39:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: layout/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:39:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: layout/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: layouts/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: layouts/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:39:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: layouts/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:39:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: layouts/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: style/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: style/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:39:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: style/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:39:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: style/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:39:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: styles/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:39:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: styles/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:39:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: styles/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:39:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: styles/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:39:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: design/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:39:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: design/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:39:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: design/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:39:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: design/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:39:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: designs/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:39:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: designs/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: designs/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: designs/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:39:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:39:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:39:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:39:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:40:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crons/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:40:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crons/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:40:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crons/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:40:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crons/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:40:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: task/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:40:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: task/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:40:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: task/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:40:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: task/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:40:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tasks/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:40:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tasks/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:40:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tasks/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:40:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tasks/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:40:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: job/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:40:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: job/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:40:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: job/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:40:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: job/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:40:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jobs/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:40:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jobs/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:40:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jobs/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:40:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jobs/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:40:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: schedule/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:40:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: schedule/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:40:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: schedule/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:40:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: schedule/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:40:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: schedules/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:40:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: schedules/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:40:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: schedules/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:40:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: schedules/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:40:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scheduler/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:40:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scheduler/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:40:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scheduler/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:40:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scheduler/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:40:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cache/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:40:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cache/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:40:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cache/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:40:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cache/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:40:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: caches/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:40:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: caches/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:40:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: caches/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:40:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: caches/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:40:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: session/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:40:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: session/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:40:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: session/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:40:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: session/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:40:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sessions/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:40:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sessions/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:40:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sessions/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:40:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sessions/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:40:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cookie/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:40:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cookie/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:41:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cookie/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:41:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cookie/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:41:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cookies/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:41:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cookies/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:41:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cookies/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:41:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cookies/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:41:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:41:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:41:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:41:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:41:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: soap/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:41:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: soap/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:41:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: soap/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:41:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: soap/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:41:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web-service/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:41:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web-service/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:41:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web-service/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:41:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web-service/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:41:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webservice/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:41:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webservice/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:41:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webservice/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:41:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webservice/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:41:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webservices/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:41:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webservices/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:41:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webservices/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:41:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webservices/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:41:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:41:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:41:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:41:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:42:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:42:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: framework/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: framework/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:42:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: framework/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:42:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: framework/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:42:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:42:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:42:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:42:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:42:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendors/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:42:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendors/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:42:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendors/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:42:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendors/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:42:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: third-party/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:42:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: third-party/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:42:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: third-party/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:42:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: third-party/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:42:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: thirdparty/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:42:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: thirdparty/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:42:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: thirdparty/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:42:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: thirdparty/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:42:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libraries/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:42:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libraries/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:42:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libraries/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:42:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libraries/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:42:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: library/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:42:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: library/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: library/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: library/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugins/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugins/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:42:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugins/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:42:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugins/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:42:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:42:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:42:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:42:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:42:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: extensions/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:42:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: extensions/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:42:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: extensions/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:42:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: extensions/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:42:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: extension/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:42:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: extension/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:42:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: extension/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:42:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: extension/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:42:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: components/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:42:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: components/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:42:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: components/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:42:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: components/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:42:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: component/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:42:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: component/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:42:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: component/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:42:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: component/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: elements/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: elements/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:43:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: elements/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:43:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: elements/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:43:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: element/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:43:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: element/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:43:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: element/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:43:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: element/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:43:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controls/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:43:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controls/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controls/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controls/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: control/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: control/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:43:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: control/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:43:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: control/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: widgets/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: widgets/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:43:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: widgets/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:43:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: widgets/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:43:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: widget/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:43:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: widget/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:43:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: widget/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:43:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: widget/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:43:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blocks/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:43:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blocks/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blocks/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blocks/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:43:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: block/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:43:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: block/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:43:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: block/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:43:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: block/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:43:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:43:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:43:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/admin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:43:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/admin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:43:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/modules/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:43:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/modules/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:44:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/modules/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:44:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/modules/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:44:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/include/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:44:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/include/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:44:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/include/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:44:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/include/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:44:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/includes/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:44:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/includes/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:44:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/includes/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:44:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/includes/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:44:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/core/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:44:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/core/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:44:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/core/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:44:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/core/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:44:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/lib/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:44:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/lib/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:44:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/lib/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:44:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/lib/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:44:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/library/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:44:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/library/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:44:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/library/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:44:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/library/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:44:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/api/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:44:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/api/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/api/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/api/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:44:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:44:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:44:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:44:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:44:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:44:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:44:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connect.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:44:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connect.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:44:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connection.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:44:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connection.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:45:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:45:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:45:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:45:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:45:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:45:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:45:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:45:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:45:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/keys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:45:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/keys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:45:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/credentials.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:45:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/credentials.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:45:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: includes/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:45:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: includes/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:45:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: include/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:45:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: include/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:45:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:45:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:45:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:45:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:45:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jenkins.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:45:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jenkins.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:45:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Jenkinsfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 21:45:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Jenkinsfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 21:45:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:45:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:45:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:45:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:46:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:46:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:46:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:46:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:46:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Dockerfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 21:46:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Dockerfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 21:46:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:46:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:46:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:46:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:46:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yarn.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:46:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yarn.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:46:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: npm-debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:46:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: npm-debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:46:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webpack.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:46:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webpack.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:46:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:46:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:46:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:46:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:46:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conn.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:46:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conn.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:46:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbconn.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:46:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbconn.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:46:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db-connection.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:46:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db-connection.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:46:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_credentials.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:46:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_credentials.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:46:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql_connect.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:46:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql_connect.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:46:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqli_connect.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:46:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqli_connect.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:46:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pdo_connect.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:46:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pdo_connect.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:46:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database_credentials.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:46:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database_credentials.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:46:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_creds.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:46:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_creds.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:46:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connection_string.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:46:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connection_string.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:46:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:46:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:46:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: creds.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:46:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: creds.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:47:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:47:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:47:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:47:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:47:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:47:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:47:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:47:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:47:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:47:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:47:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:47:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:47:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:47:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:47:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:47:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:47:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:47:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:47:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:47:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:47:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hibernate.cfg.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:47:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hibernate.cfg.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:47:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:47:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:47:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:47:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:47:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:47:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:47:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-services.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:47:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-services.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:47:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:47:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:47:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:47:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:47:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oauth2.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:47:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oauth2.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:47:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client_secret.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:47:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client_secret.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:47:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client_secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:47:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client_secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:47:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: facebook-app-secret.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:47:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: facebook-app-secret.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:48:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fb_api_secrets.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:48:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fb_api_secrets.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:48:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: instagram_api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:48:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: instagram_api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:48:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: telegram_bot.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:48:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: telegram_bot.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:48:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: discord_bot.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:48:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: discord_bot.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:48:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: slack_api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:48:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: slack_api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:48:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: whatsapp_api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:48:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: whatsapp_api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:48:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sms_api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:48:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sms_api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:48:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nexmo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:48:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nexmo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:48:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twillio_creds.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:48:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twillio_creds.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twilio_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twilio_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:48:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twilio_keys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:48:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twilio_keys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_keys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_keys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:48:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3_credentials.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:48:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3_credentials.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:48:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:48:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:48:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2_keys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:48:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2_keys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:48:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rds_credentials.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:48:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rds_credentials.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:48:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: digitalocean_api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:48:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: digitalocean_api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:48:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: linode_api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:48:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: linode_api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:48:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vultr_api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:48:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vultr_api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:48:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudflare_api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:48:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudflare_api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:49:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudflare-settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:49:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudflare-settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:49:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdn_credentials.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:49:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdn_credentials.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:49:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: akamai_credentials.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:49:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: akamai_credentials.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:49:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssh_keys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:49:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssh_keys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:49:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ssh_config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 21:49:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ssh_config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 21:49:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssh_credentials.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:49:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssh_credentials.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:49:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sftp_credentials.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:49:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sftp_credentials.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:49:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp_credentials.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:49:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp_credentials.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:49:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:49:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:49:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftpconfig.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:49:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftpconfig.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:49:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:49:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:49:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_credentials.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:49:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_credentials.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:49:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup-script.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:49:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup-script.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:49:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:49:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:49:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:49:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:49:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:49:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:49:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:49:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:49:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users.csv ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:49:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users.csv ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:50:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:50:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:50:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:50:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:50:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin_users.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:50:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin_users.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:50:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: employee_list.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:50:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: employee_list.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:50:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: customers.csv ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:50:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: customers.csv ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:50:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: customers.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:50:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: customers.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:50:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: subscribers.csv ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:50:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: subscribers.csv ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:50:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: subscribers.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:50:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: subscribers.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:50:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: newsletter_list.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:50:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: newsletter_list.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:50:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email_list.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:50:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email_list.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:50:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailing_list.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:50:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailing_list.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:50:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passwordreset.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:50:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passwordreset.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:50:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reset_password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:50:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reset_password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:50:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reset.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:50:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reset.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:50:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payment_gateway.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:50:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payment_gateway.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:50:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payment_processor.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:50:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payment_processor.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:50:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe_secret.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:50:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe_secret.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:50:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe_key.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:50:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe_key.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:50:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe-keys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:50:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe-keys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:50:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: paypal_secret.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:50:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: paypal_secret.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:50:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: paypal_key.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:50:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: paypal_key.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:51:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: paypal-keys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:51:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: paypal-keys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:51:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: braintree_key.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:51:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: braintree_key.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:51:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: braintree-credentials.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:51:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: braintree-credentials.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:51:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: authorize_net.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:51:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: authorize_net.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:51:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: authorizenet.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:51:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: authorizenet.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:51:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payment_keys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:51:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payment_keys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:51:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ccavenue.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:51:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ccavenue.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:51:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: paytm.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:51:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: paytm.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:51:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crypto_keys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:51:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crypto_keys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:51:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bitcoin_wallet.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:51:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bitcoin_wallet.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:51:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ethereum_wallet.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:51:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ethereum_wallet.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:51:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wallet_keys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:51:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wallet_keys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:51:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private_key.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:51:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private_key.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:51:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: certificate.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:51:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: certificate.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:51:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:51:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:51:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.crt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:51:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.crt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:51:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL id_rsa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 21:51:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL id_rsa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 21:51:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: id_rsa.pub ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:51:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: id_rsa.pub ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:51:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL authorized_keys was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 21:51:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL authorized_keys was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 21:51:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL known_hosts was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-13 21:51:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL known_hosts was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-13 21:51:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssl_cert.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:51:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssl_cert.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:51:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssl_keys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:51:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssl_keys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:52:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jwt_secret.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:52:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jwt_secret.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:52:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jwt_key.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:52:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jwt_key.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:52:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: encryption_key.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:52:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: encryption_key.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:52:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: encryption_iv.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:52:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: encryption_iv.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:52:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: encrypt_key.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:52:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: encrypt_key.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:52:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret_key.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:52:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret_key.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:52:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_secret.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:52:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_secret.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:52:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_key.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:52:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_key.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:52:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: license_key.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:52:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: license_key.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:52:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: license.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:52:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: license.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:52:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: license.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:52:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: license.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:52:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serial.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:52:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serial.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:52:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: activation.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:52:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: activation.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:52:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redis_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:52:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redis_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: memcached_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: memcached_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:52:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cache_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:52:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cache_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:52:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: session_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:52:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: session_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:52:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sentry_dsn.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:52:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sentry_dsn.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:52:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sentry-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:52:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sentry-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:52:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: newrelic.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:52:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: newrelic.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:52:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: newrelic_key.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:52:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: newrelic_key.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:52:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: monitoring_key.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:52:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: monitoring_key.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:52:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: loggly_token.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:52:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: loggly_token.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:52:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logging_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:52:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logging_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:52:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: algolia_api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:52:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: algolia_api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:53:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: elasticsearch_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:53:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: elasticsearch_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:53:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: solr_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:53:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: solr_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:53:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lucene_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:53:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lucene_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:53:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: search_api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:53:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: search_api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:53:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recaptcha_key.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:53:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recaptcha_key.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:53:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recaptcha-keys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:53:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recaptcha-keys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:53:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: captcha_key.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:53:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: captcha_key.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:53:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gdpr_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:53:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gdpr_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:53:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: privacy_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:53:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: privacy_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:53:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: compliance_settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:53:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: compliance_settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:53:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment_key.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:53:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment_key.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:53:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:53:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:53:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:53:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:53:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy_keys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:53:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy_keys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:53:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:53:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:53:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy_hooks.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:53:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy_hooks.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:54:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webhook_secret.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:54:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webhook_secret.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:54:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webhook_keys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:54:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webhook_keys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:54:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webhook_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:54:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webhook_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:54:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:54:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:54:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci_credentials.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:54:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci_credentials.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:54:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:54:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:54:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdn_url.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:54:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdn_url.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:54:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdn_keys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:54:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdn_keys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:54:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content_api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:54:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content_api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:54:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms_api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:54:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms_api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:54:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:54:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:54:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms_credentials.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:54:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms_credentials.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:54:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:54:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:54:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: joomla_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:54:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: joomla_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:54:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: drupal_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:54:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: drupal_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:54:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: magento_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:54:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: magento_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:54:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: opencart_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:54:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: opencart_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:54:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prestashop_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:54:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prestashop_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:54:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopify_api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:54:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopify_api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:55:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopify_credentials.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:55:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopify_credentials.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:55:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: woocommerce_keys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:55:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: woocommerce_keys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:55:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecommerce_api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:55:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecommerce_api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:55:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: translation_api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:55:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: translation_api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:55:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: voice_api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:55:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: voice_api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:55:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sip_credentials.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:55:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sip_credentials.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:55:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: voip_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:55:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: voip_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:55:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: video_api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:55:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: video_api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:55:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: streaming_keys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:55:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: streaming_keys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:55:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtmp_keys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:55:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtmp_keys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:55:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media_server.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:55:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media_server.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:55:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conversion_api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:55:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conversion_api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:55:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: export_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:55:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: export_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:55:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: import_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:55:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: import_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:55:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data_migration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:55:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data_migration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:55:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:55:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:55:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:55:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:56:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:56:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:56:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:56:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:56:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:56:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:56:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:56:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:56:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:56:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:56:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:56:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:56:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:56:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:56:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/default/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:56:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/default/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:56:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/default/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:56:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/default/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:56:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:56:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:56:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:56:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:56:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:56:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:56:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:56:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:56:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:56:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:56:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:56:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:56:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:56:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:56:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:56:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:56:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:56:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:57:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:57:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:57:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:57:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:57:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:57:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:57:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:57:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:57:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:57:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:57:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tokens.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:57:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tokens.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:57:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tokens.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:57:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tokens.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:57:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:57:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:57:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:57:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:57:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:57:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:57:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:57:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:57:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:57:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:57:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:57:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:57:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:57:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:57:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:57:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:57:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:57:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:57:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:57:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:58:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_key.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:58:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_key.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:58:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:58:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:58:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apikey.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:58:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apikey.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:58:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apikeys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:58:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apikeys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:58:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:58:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:58:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:58:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:58:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_credentials.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:58:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_credentials.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:58:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:58:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:58:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:58:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:58:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-credentials.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:58:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-credentials.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:58:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google_api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:58:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google_api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:58:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:58:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:58:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: googleapi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:58:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: googleapi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:58:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: facebook_api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:58:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: facebook_api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: facebook-api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: facebook-api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:58:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: facebookapi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:58:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: facebookapi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:58:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twitter_api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:58:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twitter_api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:58:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twitter-api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:58:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twitter-api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:58:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twitterapi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:58:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twitterapi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:59:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:59:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:59:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:59:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:59:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: paypal_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:59:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: paypal_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:59:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: paypal-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:59:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: paypal-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:59:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payment_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:59:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payment_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:59:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payment-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:59:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payment-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:59:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailchimp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:59:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailchimp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:59:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:59:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:59:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailgun.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:59:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailgun.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:59:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:59:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:59:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:59:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:59:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:59:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:59:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:59:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:59:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:59:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:59:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: maps_api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:59:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: maps_api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:59:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: maps-api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:59:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: maps-api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:59:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: analytics.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:59:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: analytics.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:59:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: analytics_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:59:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: analytics_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:59:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: analytics-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:59:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: analytics-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:59:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: constants.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:59:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: constants.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 21:59:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: defines.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 21:59:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: defines.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:00:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: parameters.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:00:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: parameters.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:00:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:00:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:00:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:00:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:00:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:00:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:00:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:00:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:00:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:00:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:00:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:00:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:00:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:00:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:00:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:00:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:00:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:00:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:00:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:00:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:00:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:00:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:00:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:00:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:00:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-credentials.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:00:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-credentials.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:00:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-credentials.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:00:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-credentials.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:01:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:01:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:01:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:01:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:01:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:01:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:01:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_credentials.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:01:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_credentials.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:01:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:01:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:01:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_credentials.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:01:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_credentials.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:01:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_keys.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:01:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_keys.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:01:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:01:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:01:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_keys.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:01:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_keys.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:01:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-keys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:01:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-keys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:01:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-keys.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:01:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-keys.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:01:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:01:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:01:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-keys.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:01:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-keys.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:01:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:01:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:01:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:01:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:01:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:01:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:01:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:01:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:01:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:01:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:02:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:02:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3_config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3_config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3_config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3_config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-credentials.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-credentials.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-credentials.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-credentials.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:02:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-credentials.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:02:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-credentials.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:02:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3_credentials.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:02:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3_credentials.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:02:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:02:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:02:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3_credentials.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:02:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3_credentials.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:02:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:02:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:02:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:02:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:02:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:02:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:02:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/s3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:02:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/s3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:03:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/s3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:03:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/s3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:03:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/s3.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:03:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/s3.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:03:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/s3.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:03:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/s3.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:03:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/amazon.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:03:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/amazon.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:03:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/amazon.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:03:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/amazon.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:03:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/amazon.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:03:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/amazon.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:03:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/amazon.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:03:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/amazon.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:03:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/aws.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:03:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/aws.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:03:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/aws.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:03:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/aws.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:03:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:03:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:03:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:03:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:03:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: include/aws.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:03:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: include/aws.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:03:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: include/aws.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:03:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: include/aws.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:03:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: include/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:03:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: include/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:03:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: include/aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:03:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: include/aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:03:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: includes/aws.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:03:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: includes/aws.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:03:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: includes/aws.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:03:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: includes/aws.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:04:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: includes/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:04:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: includes/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:04:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: includes/aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:04:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: includes/aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:04:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/aws.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:04:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/aws.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:04:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/aws.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:04:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/aws.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:04:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:04:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:04:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:04:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:04:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/aws.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:04:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/aws.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:04:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/s3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:04:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/s3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/aws.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/aws.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:04:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/aws.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:04:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/aws.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:04:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:04:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:04:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:04:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:04:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services/aws.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:04:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services/aws.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:04:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services/aws.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:04:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services/aws.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:04:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:04:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:04:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services/aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:04:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services/aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:04:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:04:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:04:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:04:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:05:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:05:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:05:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:05:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:05:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:05:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:05:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda-config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:05:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda-config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:05:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:05:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:05:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda-config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:05:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda-config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:05:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cognito.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:05:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cognito.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:05:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cognito.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:05:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cognito.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:05:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cognito.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:05:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cognito.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:05:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cognito.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:05:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cognito.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:05:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dynamodb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:05:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dynamodb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:05:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dynamodb.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:05:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dynamodb.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:05:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dynamodb.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:05:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dynamodb.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:05:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dynamodb.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:05:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dynamodb.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:05:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqs.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:05:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqs.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:05:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqs.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:05:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqs.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:05:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqs.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:05:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqs.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:05:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqs.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:05:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqs.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:05:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudfront.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:05:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudfront.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:05:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudfront.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:05:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudfront.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:06:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudfront.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:06:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudfront.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:06:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudfront.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:06:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudfront.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:06:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:06:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:06:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:06:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:06:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:06:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:06:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:06:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:06:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rds.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:06:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rds.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:06:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rds.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:06:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rds.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:06:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rds.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:06:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rds.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:06:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rds.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:06:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rds.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:06:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:06:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:06:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passwords.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:06:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passwords.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:06:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:06:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:06:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_credentials.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:06:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_credentials.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:06:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twilio.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:06:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twilio.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:06:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-13 22:06:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-13 22:53:49 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-03-13 22:53:49 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}