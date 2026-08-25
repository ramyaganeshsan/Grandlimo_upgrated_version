<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2025-06-19 00:24:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: op/9_md/9/9/9/9/9 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 00:24:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: op/9_md/9/9/9/9/9 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 00:53:41 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-06-19 00:53:41 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-06-19 00:53:41 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-06-19 00:53:41 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-06-19 00:53:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 00:53:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 00:53:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL odinhttpcall1750283621 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 00:53:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL odinhttpcall1750283621 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 00:53:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL evox/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 00:53:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL evox/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 00:53:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 00:53:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 00:53:42 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-06-19 00:53:42 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-06-19 00:53:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 00:53:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 00:53:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/authLogin.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 00:53:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/authLogin.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 00:53:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin/info/system was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 00:53:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin/info/system was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 00:53:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 00:53:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 00:53:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin/cores was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 00:53:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin/cores was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 00:53:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 00:53:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:03:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:03:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:10:34 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-06-19 02:10:34 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-06-19 02:10:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 02:10:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 02:10:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:10:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:10:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 02:10:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 02:10:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 02:10:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 02:10:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:10:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:10:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:10:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:10:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:10:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:10:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:10:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:10:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:10:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:10:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:10:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:10:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL etc/caddy/Caddyfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 02:10:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL etc/caddy/Caddyfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 02:10:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/tsconfig.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:10:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/tsconfig.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:10:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:10:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:10:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: products/.gitlab-ci.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:10:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: products/.gitlab-ci.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:10:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:10:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/deployment.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/deployment.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 02:11:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 02:11:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/routes.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/routes.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/appsettings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/appsettings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 02:11:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 02:11:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend_dev.php/$ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend_dev.php/$ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/constants.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/constants.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gulpfile.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gulpfile.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:03 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
2025-06-19 02:11:03 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 02:11:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/application.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/application.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manifest.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manifest.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-06-19 02:11:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 02:11:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecosystem.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecosystem.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: README.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: README.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/deployment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/deployment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Dockerfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 02:11:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Dockerfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 02:11:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Program.cs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Program.cs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/default.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/default.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/environment.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/environment.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/production.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/production.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/development.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/development.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/devise.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/devise.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cache.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cache.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/packages/prod/doctrine.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/packages/prod/doctrine.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application-dev.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application-dev.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application-prod.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application-prod.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/applicationContext.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/applicationContext.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Config.plist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Config.plist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Info.plist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Info.plist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Environment.xcconfig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Environment.xcconfig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Config.xcconfig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Config.xcconfig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: App/Config.swift ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: App/Config.swift ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: App/Info.plist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: App/Info.plist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/java/com/example/config/Config.kt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/java/com/example/config/Config.kt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/assets/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/assets/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/prod.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/prod.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dev.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dev.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/runtime.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/runtime.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/releases.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/releases.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Rocket.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Rocket.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/Config.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/Config.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.rs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.rs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/development.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/development.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/production.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/production.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin/app.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin/app.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/development.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/development.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/production.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/production.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build.sbt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build.sbt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/plugins.sbt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/plugins.sbt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.clj ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.clj ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project.clj ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project.clj ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/config.edn ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/config.edn ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.jl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.jl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.jl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.jl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.jl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.jl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/routes.jl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/routes.jl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.jl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.jl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.ml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.ml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/server/server.ml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/server/server.ml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sys.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sys.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rel/sys.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rel/sys.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rel/vm.args ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rel/vm.args ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.cr ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.cr ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.cr ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.cr ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.cr ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.cr ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.cr ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.cr ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/routes.cr ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/routes.cr ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.nim ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.nim ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.nim ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.nim ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.nim ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.nim ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.nim ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.nim ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/routes.nim ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/routes.nim ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.R ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.R ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ui.R ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ui.R ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.R ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.R ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.R ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.R ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.m ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.m ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.f90 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.f90 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.cbl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.cbl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Sources/App/configure.swift ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Sources/App/configure.swift ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Sources/App/routes.swift ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Sources/App/routes.swift ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Resources/Config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 02:11:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Resources/Config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 02:11:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pubspec.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pubspec.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.dart ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.dart ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main.rs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main.rs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Application.cfc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Application.cfc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Application.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Application.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.cfc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.cfc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.cfc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.cfc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environment.cfc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environment.cfc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.lua ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.lua ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.lua ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.lua ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.lua ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.lua ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.lua ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.lua ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/routes.lua ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/routes.lua ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/db.lua ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/db.lua ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grails-app/conf/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grails-app/conf/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grails-app/conf/application.groovy ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grails-app/conf/application.groovy ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grails-app/conf/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grails-app/conf/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grails-app/conf/logback.groovy ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grails-app/conf/logback.groovy ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grails-app/conf/bootstrap.groovy ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grails-app/conf/bootstrap.groovy ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation/template.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation/template.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation/template.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation/template.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appspec.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appspec.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/install_dependencies.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/install_dependencies.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/start_server.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/start_server.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apprunner.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apprunner.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localstack/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localstack/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: meshes/mesh_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: meshes/mesh_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stepfunctions/state-machine-definition.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stepfunctions/state-machine-definition.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stepfunctions/state-machine-definition.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stepfunctions/state-machine-definition.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda_function.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda_function.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL etc/environment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 02:11:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL etc/environment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 02:11:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/profile.d ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/profile.d ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/ec2-user/.bashrc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/ec2-user/.bashrc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/ec2-user/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/ec2-user/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/ec2-user/.aws/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/ec2-user/.aws/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecs-params.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecs-params.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ebextensions.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ebextensions.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bucket-name/config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bucket-name/config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bucket-name/config/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bucket-name/config/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bucket-name/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bucket-name/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL CloudFormation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 02:11:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL CloudFormation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 02:11:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation-template.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation-template.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation-template.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation-template.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/deployment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/deployment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/service.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/service.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/configmap.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/configmap.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amplify/.config/project-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amplify/.config/project-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amplify/backend/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amplify/backend/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amplify/backend/environment-parameters.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amplify/backend/environment-parameters.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/aws-exports.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/aws-exports.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin/app.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin/app.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/my-stack.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/my-stack.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdk.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdk.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Terraform was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 02:11:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Terraform was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 02:11:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: variables.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: variables.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samconfig.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samconfig.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL CodePipeline was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 02:11:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL CodePipeline was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 02:11:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: buildspec.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: buildspec.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pipeline.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pipeline.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:11:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ds.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 02:11:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ds.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 02:31:39 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-06-19 02:31:39 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-06-19 03:23:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 03:23:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 03:34:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 03:34:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 03:51:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 03:51:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 04:19:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 04:19:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 05:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 05:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 05:40:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ReportServer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 05:40:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ReportServer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 05:49:38 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-06-19 05:49:38 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-06-19 05:52:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 05:52:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 06:44:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 06:44:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 06:44:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 06:44:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 06:48:15 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-06-19 06:48:15 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-06-19 06:51:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 06:51:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 06:52:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 06:52:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 06:54:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 06:54:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 06:55:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/login.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 06:55:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/login.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 06:56:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 06:56:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 07:04:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 07:04:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 07:38:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 07:38:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 08:41:10 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-06-19 08:41:10 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-06-19 09:04:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 09:04:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 09:12:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a2billing/customer/templates/default/footer.tpl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 09:12:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a2billing/customer/templates/default/footer.tpl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 09:34:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 09:34:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 09:50:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nagios/cgi-bin/status.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 09:50:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nagios/cgi-bin/status.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 09:58:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 09:58:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 09:58:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 09:58:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 09:58:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 09:58:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 09:58:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 09:58:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 09:58:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 09:58:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 09:58:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 09:58:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 09:58:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 09:58:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 09:58:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 09:58:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 09:58:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 09:58:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 09:58:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 09:58:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 09:58:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 09:58:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 09:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 09:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 09:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 09:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 09:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 09:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 09:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 09:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 09:58:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 09:58:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 09:58:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 09:58:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 09:58:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 09:58:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 09:58:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 09:58:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 09:58:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 09:58:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 09:58:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 09:58:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 09:58:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 09:58:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 09:58:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 09:58:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 09:58:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 09:58:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 09:58:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 09:58:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 09:58:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 09:58:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 09:58:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 09:58:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 09:58:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 09:58:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 09:58:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 09:58:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 09:58:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 09:58:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 09:58:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 09:58:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 09:58:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 09:58:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 10:06:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hudson was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 10:06:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hudson was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 10:10:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autodiscover/autodiscover.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 10:10:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autodiscover/autodiscover.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 10:25:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 10:25:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 10:25:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 10:25:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 10:25:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 10:25:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 10:25:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 10:25:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 10:25:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 10:25:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 10:25:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: systembc/password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 10:25:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: systembc/password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 10:25:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 10:25:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 10:25:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: form.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 10:25:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: form.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 10:48:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 10:48:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 11:14:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 11:14:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 11:28:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 11:28:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:07:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 13:07:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 13:07:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:07:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:07:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 13:07:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 13:07:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 13:07:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 13:07:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:07:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:07:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:07:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:07:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:07:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:07:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:07:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:07:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:07:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:07:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:07:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:07:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL etc/caddy/Caddyfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 13:07:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL etc/caddy/Caddyfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 13:07:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/tsconfig.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:07:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/tsconfig.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:07:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:07:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:07:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: products/.gitlab-ci.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:07:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: products/.gitlab-ci.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:07:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:07:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:07:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:07:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:07:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:07:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:07:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/deployment.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:07:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/deployment.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:07:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 13:07:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 13:07:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/routes.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:07:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/routes.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:07:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/appsettings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:07:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/appsettings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:07:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:07:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:07:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:07:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:07:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:07:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:07:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:07:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:07:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:07:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:07:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:07:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:07:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:07:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:07:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:07:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:07:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 13:07:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 13:07:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend_dev.php/$ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:07:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend_dev.php/$ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:07:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:07:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:07:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:07:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:07:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/constants.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:07:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/constants.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:07:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:07:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:07:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:07:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:07:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:07:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:07:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:07:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:07:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:07:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gulpfile.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gulpfile.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:00 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
2025-06-19 13:08:00 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 13:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/application.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/application.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manifest.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manifest.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-06-19 13:08:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 13:08:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecosystem.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecosystem.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: README.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: README.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/deployment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/deployment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Dockerfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 13:08:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Dockerfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 13:08:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Program.cs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Program.cs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/default.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/default.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/environment.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/environment.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/production.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/production.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/development.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/development.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/devise.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/devise.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cache.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cache.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/packages/prod/doctrine.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/packages/prod/doctrine.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application-dev.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application-dev.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application-prod.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application-prod.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/applicationContext.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/applicationContext.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Config.plist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Config.plist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Info.plist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Info.plist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Environment.xcconfig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Environment.xcconfig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Config.xcconfig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Config.xcconfig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: App/Config.swift ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: App/Config.swift ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: App/Info.plist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: App/Info.plist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/java/com/example/config/Config.kt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/java/com/example/config/Config.kt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/assets/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/assets/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/prod.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/prod.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dev.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dev.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/runtime.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/runtime.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/releases.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/releases.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Rocket.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Rocket.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/Config.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/Config.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.rs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.rs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/development.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/development.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/production.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/production.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin/app.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin/app.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/development.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/development.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/production.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/production.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build.sbt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build.sbt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/plugins.sbt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/plugins.sbt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.clj ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.clj ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project.clj ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project.clj ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/config.edn ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/config.edn ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.jl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.jl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.jl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.jl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.jl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.jl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/routes.jl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/routes.jl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.jl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.jl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.ml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.ml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/server/server.ml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/server/server.ml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sys.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sys.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rel/sys.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rel/sys.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rel/vm.args ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rel/vm.args ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.cr ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.cr ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.cr ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.cr ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.cr ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.cr ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.cr ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.cr ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/routes.cr ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/routes.cr ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.nim ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.nim ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.nim ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.nim ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.nim ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.nim ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.nim ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.nim ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/routes.nim ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/routes.nim ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.R ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.R ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ui.R ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ui.R ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.R ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.R ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.R ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.R ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.m ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.m ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.f90 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.f90 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.cbl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.cbl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Sources/App/configure.swift ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Sources/App/configure.swift ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Sources/App/routes.swift ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Sources/App/routes.swift ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Resources/Config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 13:08:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Resources/Config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 13:08:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pubspec.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pubspec.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.dart ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.dart ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main.rs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main.rs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Application.cfc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Application.cfc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Application.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Application.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.cfc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.cfc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.cfc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.cfc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environment.cfc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environment.cfc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.lua ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.lua ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.lua ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.lua ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.lua ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.lua ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.lua ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.lua ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/routes.lua ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/routes.lua ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/db.lua ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/db.lua ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grails-app/conf/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grails-app/conf/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grails-app/conf/application.groovy ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grails-app/conf/application.groovy ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grails-app/conf/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grails-app/conf/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grails-app/conf/logback.groovy ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grails-app/conf/logback.groovy ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grails-app/conf/bootstrap.groovy ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grails-app/conf/bootstrap.groovy ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation/template.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation/template.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation/template.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation/template.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appspec.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appspec.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/install_dependencies.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/install_dependencies.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/start_server.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/start_server.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apprunner.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apprunner.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localstack/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localstack/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: meshes/mesh_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: meshes/mesh_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stepfunctions/state-machine-definition.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stepfunctions/state-machine-definition.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stepfunctions/state-machine-definition.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stepfunctions/state-machine-definition.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda_function.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda_function.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL etc/environment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 13:08:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL etc/environment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 13:08:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/profile.d ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/profile.d ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/ec2-user/.bashrc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/ec2-user/.bashrc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/ec2-user/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/ec2-user/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/ec2-user/.aws/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/ec2-user/.aws/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecs-params.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecs-params.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ebextensions.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ebextensions.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bucket-name/config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bucket-name/config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bucket-name/config/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bucket-name/config/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bucket-name/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bucket-name/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL CloudFormation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 13:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL CloudFormation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 13:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation-template.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation-template.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation-template.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation-template.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/deployment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/deployment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/service.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/service.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/configmap.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/configmap.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amplify/.config/project-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amplify/.config/project-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amplify/backend/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amplify/backend/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amplify/backend/environment-parameters.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amplify/backend/environment-parameters.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/aws-exports.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/aws-exports.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin/app.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin/app.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/my-stack.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/my-stack.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdk.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdk.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Terraform was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 13:08:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Terraform was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 13:08:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: variables.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: variables.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samconfig.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samconfig.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL CodePipeline was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 13:08:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL CodePipeline was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 13:08:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: buildspec.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: buildspec.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pipeline.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pipeline.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 13:08:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ds.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 13:08:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ds.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 14:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 14:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 14:02:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 14:02:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 14:23:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: device.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 14:23:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: device.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 14:25:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 14:25:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 14:31:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 14:31:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 14:40:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 14:40:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 15:37:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: websql/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 15:37:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: websql/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 15:37:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpma/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 15:37:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpma/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 15:37:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-2.5.4/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 15:37:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-2.5.4/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 15:37:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpmyadmin/scripts/setup.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 15:37:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpmyadmin/scripts/setup.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 15:37:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin3/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 15:37:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin3/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 15:37:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-2.10.0.2/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 15:37:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-2.10.0.2/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 15:37:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 15:37:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 15:37:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 15:37:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 15:37:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-2.10.3/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 15:37:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-2.10.3/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 15:38:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-2.5.5-pl1/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 15:38:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-2.5.5-pl1/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 15:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-2.11.0/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 15:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-2.11.0/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 15:38:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-2.5.5/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 15:38:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-2.5.5/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 15:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy-admin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 15:38:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy-admin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 15:39:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PHPMYADMIN/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 15:39:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PHPMYADMIN/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 15:39:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 15:39:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 15:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webdb/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 15:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webdb/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 15:39:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqlmanager/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 15:39:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqlmanager/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 15:39:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-2.11.1.2/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 15:39:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-2.11.1.2/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 15:39:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/phpMyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 15:39:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/phpMyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 15:39:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: SQL/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 15:39:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: SQL/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 15:40:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin2/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 15:40:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin2/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 15:40:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-2.8.0.2/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 15:40:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-2.8.0.2/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 15:40:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqladmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 15:40:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqladmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 15:40:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-2.11.4/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 15:40:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-2.11.4/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 15:40:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 15:40:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 15:40:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 15:40:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 15:40:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-2.5.7-pl1/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 15:40:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-2.5.7-pl1/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 15:40:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 15:40:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 15:56:32 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-06-19 15:56:32 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-06-19 16:03:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: device.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 16:03:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: device.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 16:13:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 16:13:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 16:47:38 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-06-19 16:47:38 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-06-19 17:33:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 17:33:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 17:34:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 17:34:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 18:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 18:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 18:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 18:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 18:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 18:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 18:29:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL etc/caddy/Caddyfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 18:29:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL etc/caddy/Caddyfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 18:29:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/tsconfig.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/tsconfig.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: products/.gitlab-ci.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: products/.gitlab-ci.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/deployment.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/deployment.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 18:29:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 18:29:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/routes.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/routes.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/appsettings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/appsettings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 18:29:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 18:29:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend_dev.php/$ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend_dev.php/$ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/constants.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/constants.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gulpfile.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gulpfile.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:17 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
2025-06-19 18:29:17 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 18:29:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/application.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/application.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manifest.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manifest.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-06-19 18:29:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 18:29:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecosystem.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecosystem.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: README.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: README.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/deployment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/deployment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Dockerfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 18:29:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Dockerfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 18:29:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Program.cs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Program.cs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/default.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/default.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/environment.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/environment.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/production.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/production.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/development.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/development.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/devise.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/devise.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cache.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cache.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/packages/prod/doctrine.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/packages/prod/doctrine.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application-dev.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application-dev.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application-prod.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application-prod.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/applicationContext.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/applicationContext.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Config.plist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Config.plist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Info.plist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Info.plist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Environment.xcconfig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Environment.xcconfig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Config.xcconfig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Config.xcconfig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: App/Config.swift ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: App/Config.swift ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: App/Info.plist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: App/Info.plist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/java/com/example/config/Config.kt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/java/com/example/config/Config.kt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/assets/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/assets/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/prod.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/prod.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dev.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dev.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/runtime.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/runtime.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/releases.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/releases.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Rocket.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Rocket.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/Config.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/Config.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.rs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.rs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/development.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/development.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/production.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/production.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin/app.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin/app.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/development.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/development.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/production.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/production.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build.sbt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build.sbt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/plugins.sbt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/plugins.sbt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.clj ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.clj ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project.clj ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project.clj ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/config.edn ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/config.edn ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.jl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.jl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.jl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.jl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.jl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.jl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/routes.jl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/routes.jl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.jl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.jl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.ml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.ml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/server/server.ml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/server/server.ml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sys.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sys.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rel/sys.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rel/sys.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rel/vm.args ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rel/vm.args ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.cr ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.cr ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.cr ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.cr ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.cr ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.cr ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.cr ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.cr ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/routes.cr ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/routes.cr ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.nim ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.nim ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.nim ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.nim ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.nim ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.nim ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.nim ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.nim ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/routes.nim ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/routes.nim ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.R ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.R ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ui.R ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ui.R ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.R ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.R ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.R ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.R ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.m ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.m ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.f90 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.f90 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.cbl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.cbl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Sources/App/configure.swift ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Sources/App/configure.swift ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Sources/App/routes.swift ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Sources/App/routes.swift ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Resources/Config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 18:29:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Resources/Config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 18:29:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pubspec.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pubspec.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.dart ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.dart ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main.rs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main.rs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Application.cfc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Application.cfc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Application.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Application.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.cfc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.cfc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.cfc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.cfc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environment.cfc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environment.cfc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.lua ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.lua ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.lua ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.lua ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.lua ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.lua ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.lua ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.lua ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/routes.lua ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/routes.lua ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/db.lua ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/db.lua ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grails-app/conf/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grails-app/conf/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grails-app/conf/application.groovy ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grails-app/conf/application.groovy ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grails-app/conf/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grails-app/conf/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grails-app/conf/logback.groovy ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grails-app/conf/logback.groovy ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grails-app/conf/bootstrap.groovy ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grails-app/conf/bootstrap.groovy ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation/template.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation/template.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation/template.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation/template.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appspec.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appspec.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/install_dependencies.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/install_dependencies.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/start_server.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/start_server.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apprunner.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apprunner.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localstack/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localstack/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: meshes/mesh_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: meshes/mesh_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stepfunctions/state-machine-definition.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stepfunctions/state-machine-definition.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stepfunctions/state-machine-definition.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stepfunctions/state-machine-definition.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda_function.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda_function.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL etc/environment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 18:29:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL etc/environment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 18:29:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/profile.d ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/profile.d ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/ec2-user/.bashrc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/ec2-user/.bashrc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/ec2-user/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/ec2-user/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/ec2-user/.aws/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/ec2-user/.aws/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecs-params.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecs-params.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ebextensions.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ebextensions.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bucket-name/config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bucket-name/config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bucket-name/config/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bucket-name/config/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bucket-name/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bucket-name/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL CloudFormation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 18:29:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL CloudFormation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 18:29:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation-template.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation-template.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation-template.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation-template.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/deployment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/deployment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/service.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/service.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/configmap.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/configmap.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amplify/.config/project-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amplify/.config/project-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amplify/backend/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amplify/backend/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amplify/backend/environment-parameters.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amplify/backend/environment-parameters.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/aws-exports.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/aws-exports.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin/app.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin/app.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/my-stack.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/my-stack.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdk.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdk.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Terraform was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 18:29:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Terraform was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 18:29:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: variables.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: variables.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samconfig.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samconfig.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL CodePipeline was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 18:29:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL CodePipeline was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 18:29:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: buildspec.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: buildspec.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pipeline.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pipeline.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:29:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ds.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:29:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ds.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 18:35:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 18:35:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 18:51:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 18:51:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 19:05:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 19:05:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 20:03:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/client/update was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-06-19 20:03:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/client/update was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 20:27:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 20:27:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 20:41:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 20:41:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 21:11:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 21:11:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 21:27:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/validate/code was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-06-19 21:27:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/validate/code was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 21:42:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: device.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 21:42:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: device.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 21:46:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 21:46:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 22:09:36 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-06-19 22:09:36 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-06-19 22:32:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: device.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 22:32:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: device.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 23:01:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: device.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 23:01:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: device.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 23:39:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: form.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 23:39:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: form.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 23:39:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 23:39:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 23:39:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 23:39:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 23:39:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: systembc/password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 23:39:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: systembc/password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 23:39:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 23:39:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 23:39:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 23:39:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 23:39:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 23:39:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 23:39:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 23:39:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 23:41:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 23:41:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 23:41:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 23:41:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 23:41:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 23:41:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 23:41:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 23:41:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 23:41:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 23:41:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 23:41:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 23:41:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 23:41:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 23:41:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 23:41:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 23:41:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 23:41:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 23:41:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 23:41:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 23:41:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 23:41:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 23:41:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 23:41:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 23:41:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-19 23:41:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-19 23:41:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-19 23:55:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-19 23:55:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}