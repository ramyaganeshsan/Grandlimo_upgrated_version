<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2025-05-06 00:03:13 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-05-06 00:03:13 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-05-06 00:59:00 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-05-06 00:59:00 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-05-06 01:31:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 01:31:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 02:42:47 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-05-06 02:42:47 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-05-06 02:59:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 02:59:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 02:59:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 02:59:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 02:59:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 02:59:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 02:59:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 02:59:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 02:59:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 02:59:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 02:59:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 02:59:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 02:59:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 02:59:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 02:59:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 02:59:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 02:59:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 02:59:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 02:59:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 02:59:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 02:59:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 02:59:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 02:59:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 02:59:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 02:59:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 02:59:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 03:11:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hudson was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 03:11:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hudson was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 03:16:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ab2g was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 03:16:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ab2g was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 03:16:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ab2h was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 03:16:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ab2h was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 03:16:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alive.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:16:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alive.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:16:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 03:16:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 03:16:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:16:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:16:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL teorema505 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 03:16:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL teorema505 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 03:47:14 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-05-06 03:47:14 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-05-06 03:51:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:51:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:51:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:51:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:51:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amphtml/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:51:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amphtml/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:51:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aomanalyzer/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:51:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aomanalyzer/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:51:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:51:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:51:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:51:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:51:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:51:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:51:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/frontend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:51:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/frontend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:51:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:51:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:51:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/resources/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:51:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/resources/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:52:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:52:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:52:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:52:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:52:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awsconf.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:52:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awsconf.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:52:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:52:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:52:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:52:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:52:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build_tool/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:52:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build_tool/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:52:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cache/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:52:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cache/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/cd/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/cd/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:52:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:52:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:52:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:52:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:52:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:52:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:52:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config_files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:52:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config_files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:52:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:52:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:52:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/github.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:52:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/github.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:52:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:52:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:52:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:52:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:52:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:52:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:52:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:52:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:52:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:52:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:53:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:53:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:53:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:53:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:53:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/private/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:53:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/private/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:53:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/processing/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:53:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/processing/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:53:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/staging/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:53:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/staging/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:53:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:53:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:53:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:53:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:53:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:53:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:53:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: devops/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:53:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: devops/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:53:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:53:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:53:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dot.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:53:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dot.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:53:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: drupal/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:53:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: drupal/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:53:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:53:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:53:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flock/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:53:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flock/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:54:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:54:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:54:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:54:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:54:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:54:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:54:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:54:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:54:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:54:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:54:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infra/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:54:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infra/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:54:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: integration/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:54:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: integration/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:54:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:54:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:54:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:54:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:54:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:54:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:54:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:54:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:54:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/js/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:54:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/js/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:54:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/python/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:54:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/python/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:54:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:54:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:54:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:54:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:54:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/archived/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:54:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/archived/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:54:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/current/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:54:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/current/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:54:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/temp/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:54:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/temp/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:54:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __macosx/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:54:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __macosx/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:55:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: magento/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:55:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: magento/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:55:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:55:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:55:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:55:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:55:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:55:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:55:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: member/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:55:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: member/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:55:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: migrations/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:55:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: migrations/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:55:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: misc/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:55:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: misc/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:55:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:55:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:55:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/auth/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:55:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/auth/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:55:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/db/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:55:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/db/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:55:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/utils/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:55:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/utils/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:55:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: partners/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:55:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: partners/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:55:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: platform/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:55:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: platform/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:55:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:55:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:55:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:55:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:55:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:55:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:55:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:55:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:55:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:55:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:55:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/backend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:55:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/backend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:56:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/frontend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:56:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/frontend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:56:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:56:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:56:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:56:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:56:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:56:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:56:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: releases/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:56:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: releases/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:56:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repo/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:56:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repo/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:56:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resource/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:56:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resource/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samples/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samples/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:56:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sandbox/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:56:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sandbox/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:56:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:56:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:56:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:56:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:56:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:56:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:56:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:56:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:56:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:56:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:56:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sources/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:56:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sources/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:56:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:56:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:57:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging_area/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:57:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging_area/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:57:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging_environment/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:57:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging_environment/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:57:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:57:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:57:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/content/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:57:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/content/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:57:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:57:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:57:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:57:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:57:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL store/digital_uploads was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 03:57:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL store/digital_uploads was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 03:57:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: support/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:57:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: support/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:57:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:57:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:57:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:57:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:57:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_configs/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:57:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_configs/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_environment/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_environment/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:57:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:57:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:57:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_area/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:57:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_area/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:57:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_backend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:57:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_backend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:57:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:57:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:57:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_panel/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:57:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_panel/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:57:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:57:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:57:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:57:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:58:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:58:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:58:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:58:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 03:58:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 03:58:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 04:40:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 04:40:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 04:54:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bapi/apex/v1/public/apex/cms/article/latest/query ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 04:54:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bapi/apex/v1/public/apex/cms/article/latest/query ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 06:24:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 06:24:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 06:43:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autodiscover/autodiscover.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 06:43:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autodiscover/autodiscover.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 07:05:40 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-05-06 07:05:40 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-05-06 07:16:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 07:16:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 07:18:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 07:18:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 07:20:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 07:20:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 07:22:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/login.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 07:22:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/login.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 07:24:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 07:24:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 07:32:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL containers/json was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 07:32:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL containers/json was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 07:33:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL computeMetadata/v1/project was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 07:33:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL computeMetadata/v1/project was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 07:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 07:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:11:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL RDWeb/Pages was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 08:11:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL RDWeb/Pages was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 08:15:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:15:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-05-06 08:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 08:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secure-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secure-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local_settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local_settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/default.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/default.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/cache/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/cache/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm/values.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm/values.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/install.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/install.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: joomla/configuration.php-dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: joomla/configuration.php-dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/default/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/default/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bitrix/php_interface/dbconn.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bitrix/php_interface/dbconn.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: typo3conf/localconf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: typo3conf/localconf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.old.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.old.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:29:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:29:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL storage/framework/sessions was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 08:29:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL storage/framework/sessions was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 08:29:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL storage/framework/cache was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 08:29:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL storage/framework/cache was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 08:29:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL storage/framework/views was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 08:29:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL storage/framework/views was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 08:29:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL nova-api/styles was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 08:29:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL nova-api/styles was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 08:30:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/logs/dev.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:30:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/logs/dev.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:30:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/logs/prod.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:30:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/logs/prod.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:30:01 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
2025-05-06 08:30:01 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 08:30:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/routes.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:30:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/routes.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:30:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:30:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:30:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sites/all/modules was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 08:30:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sites/all/modules was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 08:30:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sites/all/themes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 08:30:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sites/all/themes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 08:30:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/install.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:30:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/install.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:30:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CHANGELOG.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:30:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CHANGELOG.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:30:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/local.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:30:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/local.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:30:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:30:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:30:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/log/system.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:30:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/log/system.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:30:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/log/exception.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:30:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/log/exception.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:30:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:30:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:30:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:30:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:30:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:30:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:30:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/wp/v2/users was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 08:30:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/wp/v2/users was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 08:30:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:30:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:30:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/error.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:30:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/error.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:30:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:30:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:30:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yarn.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:30:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yarn.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:30:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:30:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:30:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:30:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:30:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:30:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:30:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Dockerfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 08:30:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Dockerfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 08:30:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 08:30:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 08:30:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:30:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:30:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger-ui.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:30:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger-ui.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:30:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: openapi.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:30:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: openapi.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:30:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:30:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:30:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 08:30:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 08:42:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 08:42:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 09:06:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autodiscover/autodiscover.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 09:06:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autodiscover/autodiscover.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 09:16:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 09:16:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 09:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 09:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 09:37:26 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-05-06 09:37:26 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-05-06 10:21:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 10:21:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 10:23:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 10:23:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 10:23:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 10:23:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 10:40:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 10:40:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 10:54:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 10:54:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 11:14:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 11:14:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 12:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 12:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 12:32:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 12:32:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 13:07:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 13:07:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 14:26:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 14:26:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 14:43:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 14:43:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 14:43:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 14:43:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 15:23:58 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-05-06 15:23:58 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-05-06 15:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 15:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 15:34:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 15:34:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 15:34:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 15:34:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 15:34:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 15:34:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 15:34:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 15:34:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 15:34:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 15:34:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 15:34:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 15:34:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 15:34:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 15:34:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 15:34:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 15:34:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 15:34:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 15:34:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 15:34:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 15:34:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 15:34:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 15:34:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 15:34:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 15:34:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 15:34:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 15:34:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 15:34:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 15:34:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 15:34:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 15:34:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 15:34:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 15:34:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 15:34:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 15:34:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 15:34:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 15:34:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 15:34:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 15:34:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 15:34:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 15:34:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 15:34:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 15:34:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 15:34:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 15:34:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 15:34:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 15:34:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 15:34:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 15:34:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 15:34:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 15:34:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 15:34:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 15:34:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 16:00:51 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-05-06 16:00:51 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-05-06 16:23:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 16:23:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 16:30:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 16:30:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 16:46:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 16:46:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 17:06:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 17:06:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 17:06:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 17:06:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 17:06:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 17:06:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 17:41:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL remote/logincheck was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 17:41:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL remote/logincheck was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 18:03:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sra_{BA195980-CD49-458b-9E23-C84EE0ADCD75} was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 18:03:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sra_{BA195980-CD49-458b-9E23-C84EE0ADCD75} was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 18:49:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 18:49:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 19:12:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 19:12:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 19:13:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 19:13:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 19:13:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 19:13:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 19:13:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 19:13:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 19:13:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 19:13:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 19:13:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 19:13:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 19:13:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 19:13:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 19:13:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 19:13:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 19:13:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 19:13:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 19:13:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 19:13:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 19:13:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 19:13:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 19:13:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 19:13:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 19:13:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 19:13:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 19:13:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 19:13:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 19:13:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 19:13:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 19:13:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 19:13:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 19:13:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 19:13:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 19:13:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 19:13:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 19:13:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 19:13:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 19:13:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 19:13:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 19:13:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 19:13:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 19:13:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 19:13:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 19:13:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 19:13:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 19:13:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 19:13:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 19:13:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 19:13:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 19:13:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 19:13:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 20:32:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL goform/webLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 20:32:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL goform/webLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 20:41:16 --- ERROR: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH/classes/controller/api.php [ 50 ]
2025-05-06 20:41:16 --- STRACE: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH/classes/controller/api.php [ 50 ]
--
#0 /var/www/html/application/classes/controller/api.php(50): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 50, Array)
#1 [internal function]: Controller_Api->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Api))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2025-05-06 20:44:22 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-05-06 20:44:22 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-05-06 20:47:07 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-05-06 20:47:07 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-05-06 20:54:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 20:54:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 21:17:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 21:17:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 21:58:23 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-05-06 21:58:23 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-05-06 22:01:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: --.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: --.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 22:01:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 22:01:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ADMIN/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ADMIN/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: APP/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: APP/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: BACK/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: BACK/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: BACKEND/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: BACKEND/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: BackEnd/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: BackEnd/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: FRONT/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: FRONT/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: FRONTEND/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: FRONTEND/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Lara/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Lara/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: NEW/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: NEW/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/config/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/config/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: clientes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: clientes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: clientes/laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: clientes/laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: clientes/laravel_inbox/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: clientes/laravel_inbox/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: club/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: club/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/Database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/Database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cronlab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cronlab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fileweb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fileweb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: l53/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: l53/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lms/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lms/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeweb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeweb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sistema/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sistema/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemaps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemaps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/.env/user/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/.env/user/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: AL5A_Controller/AL5A_Controller.ino ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: AL5A_Controller/AL5A_Controller.ino ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/config/database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/config/database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/config/template.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/config/template.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: AWS.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: AWS.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: AWS/AWSDetails.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: AWS/AWSDetails.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: AWS/ProfileUpload.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: AWS/ProfileUpload.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: AWSCredentials.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: AWSCredentials.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: AWSDetails.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: AWSDetails.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: AutoConfig.ino ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: AutoConfig.ino ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Client/netlify.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Client/netlify.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Cloud.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Cloud.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: DOCS.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: DOCS.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Docker.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Docker.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: IAM.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: IAM.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: IOT_code1/IOT_code1.ino ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: IOT_code1/IOT_code1.ino ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: LOG.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: LOG.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: NOTES.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: NOTES.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: README.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: README.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: SendMail.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: SendMail.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WebContent/Performance/PerformanceRunner.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WebContent/Performance/PerformanceRunner.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WebContent/ProfileImage.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WebContent/ProfileImage.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WebContent/TestProject/confirm_delete_env.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WebContent/TestProject/confirm_delete_env.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WebContent/TestProject/create_test_env.jsp/_aws_env_vars.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WebContent/TestProject/create_test_env.jsp/_aws_env_vars.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _config.rb.erb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _config.rb.erb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _config_base.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _config_base.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: account/config/dev.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: account/config/dev.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/template.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/template.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config_pro.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config_pro.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/controller.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/controller.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/controllers/merchant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/controllers/merchant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/controllers/partner.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/controllers/partner.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/helper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/helper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/mail.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/mail.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/mailer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/mailer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/mailserver.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/mailserver.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/utils.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/utils.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ansible/aws/inventory/ec2.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ansible/aws/inventory/ec2.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/aws/s3.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/aws/s3.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.ino ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.ino ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/config.ino ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/config.ino ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/template.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/template.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/controller.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/controller.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/helper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/helper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/mail.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/mail.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/mailer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/mailer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/mailserver.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/mailserver.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/model/config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/model/config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/objects/codes.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/objects/codes.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/utils.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/utils.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_gateway/conf/pay.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_gateway/conf/pay.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/controllers/users.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/controllers/users.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app-config.local.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app-config.local.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.secrets ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.secrets ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/aws/source_bucket.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/aws/source_bucket.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/development.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/development.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/helpers/mail.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/helpers/mail.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/models/post.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/models/post.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/sign.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/sign.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/configs/application.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/configs/application.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/libraries/aws-config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/libraries/aws-config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/libraries/aws/access.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/libraries/aws/access.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/nest/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/nest/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appveyor.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appveyor.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-example.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-example.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-lambda.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-lambda.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-mqtt-websockets/examples/aws-mqtt-websocket-example-paho/aws-mqtt-websocket-example-paho.ino ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-mqtt-websockets/examples/aws-mqtt-websocket-example-paho/aws-mqtt-websocket-example-paho.ino ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-notifications.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-notifications.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-nuke.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-nuke.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-s3.service.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-s3.service.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-s3.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-s3.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-wrapper.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-wrapper.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.ino ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.ino ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.service.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.service.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.show.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.show.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/access.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/access.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/identity.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/identity.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/index.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/index.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/s3.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/s3.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/s3.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/s3.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awsApp.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awsApp.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awsKEY.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awsKEY.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awsS3.util.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awsS3.util.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_config.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_config.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_config_with_multiple_sections.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_config_with_multiple_sections.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_config_with_secret.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_config_with_secret.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_cred.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_cred.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_credentials.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_credentials.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_ec2.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_ec2.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awscli.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awscli.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awsconfig.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awsconfig.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/aws/conf.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/aws/conf.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/aws/identity.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/aws/identity.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/default.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/default.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/development.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/development.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/template.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/template.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/controller.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/controller.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/helper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/helper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/mail.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/mail.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/mailer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/mailer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/mailserver.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/mailserver.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/s3/doc.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/s3/doc.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/utils.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/utils.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdn.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdn.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cfn-t1.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cfn-t1.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/workflows.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/workflows.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: circle.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: circle.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/s3v2/trace.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/s3v2/trace.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud/Scraper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud/Scraper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cmd/client-s3-trace_v2.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cmd/client-s3-trace_v2.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cmd/generate/config/rules/aws.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cmd/generate/config/rules/aws.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cmd/lakectl/cmd/docs.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cmd/lakectl/cmd/docs.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cmd/main.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cmd/main.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: components/AwsMail/SendMail.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: components/AwsMail/SendMail.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: components/aws.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: components/aws.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: compose.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: compose.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/app.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/app.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/aws.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/aws.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/aws.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/aws.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/config.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/config.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/monitor.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/monitor.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/pay.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/pay.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/s3.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/s3.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ino ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ino ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.prod.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.prod.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.rb.erb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.rb.erb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/base.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/base.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:01:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/base.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:01:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/base.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.ino ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.ino ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/controller.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/controller.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/description.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/description.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dev.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dev.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dev/config.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dev/config.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environment.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environment.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/envs/default.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/envs/default.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/helper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/helper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailserver.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailserver.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/model.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/model.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/parameters.yml.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/parameters.yml.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/prod.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/prod.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/remotefs.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/remotefs.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/rules/aws.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/rules/aws.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/run-production.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/run-production.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/runtime.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/runtime.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/s3.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/s3.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sitemap.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sitemap.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/storage.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/storage.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/template.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/template.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/travis.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/travis.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/utils.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/utils.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config_dev.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config_dev.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config_local.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config_local.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config_pro.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config_pro.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config_qa.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config_qa.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config_tmp.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config_tmp.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/application.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/application.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/aws.config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/aws.config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/routes-4aug.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/routes-4aug.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/routes.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/routes.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/s3_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/s3_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.json.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.json.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: constants.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: constants.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controller.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controller.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controller/admin/post.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controller/admin/post.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controller/api/post.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controller/api/post.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers/settings.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers/settings.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.csv ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.csv ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials_aws.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials_aws.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: custom.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: custom.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/credentials.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/credentials.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: defaults.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: defaults.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/config/database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/config/database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/config/template.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/config/template.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/controller.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/controller.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/helper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/helper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/mail.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/mail.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/mailer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/mailer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/mailserver.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/mailserver.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/utils.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/utils.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.config.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.config.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-cloud.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-cloud.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/oss/db.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/oss/db.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: elasticsearch.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: elasticsearch.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL elasticsearch_cluster_yml was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 22:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL elasticsearch_cluster_yml was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 22:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: elb.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: elb.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: emailconfig.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: emailconfig.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environnement/log/vector.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environnement/log/vector.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example_config.rb.erb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example_config.rb.erb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/Super/OnDemandConfigPortal/OnDemandConfigPortal.ino ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/Super/OnDemandConfigPortal/OnDemandConfigPortal.ino ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fvt/globals.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fvt/globals.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gateway.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gateway.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: getcpuutil.php-bakworking ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: getcpuutil.php-bakworking ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ghostsensor/ghostsensor_iot/ghostsensor_iot.ino ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ghostsensor/ghostsensor_iot/ghostsensor_iot.ino ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper/EmailHelper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper/EmailHelper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper/helper.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper/helper.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpers/fileUpload.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpers/fileUpload.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: heroku.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: heroku.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: insta-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: insta-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inventories/ec2.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inventories/ec2.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inventory/ec2.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inventory/ec2.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: knife.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: knife.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/aws-s3.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/aws-s3.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/aws-wrapper.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/aws-wrapper.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/aws-notifications.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/aws-notifications.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/fileUpload.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/fileUpload.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logging/s3Helper.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logging/s3Helper.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailserver.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailserver.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manifest.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manifest.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: minio.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: minio.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: minio.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: minio.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: minio/config/config.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: minio/config/config.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mock.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mock.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mock/dotaws.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mock/dotaws.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mocks/testing.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mocks/testing.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: model/config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: model/config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my_env/chakaash.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my_env/chakaash.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my_env/newsletter.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my_env/newsletter.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my_env/palash.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my_env/palash.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mytest/astech_robot.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mytest/astech_robot.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: netlify.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: netlify.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: non_fire_arduino_code.ino ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: non_fire_arduino_code.ino ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: notes.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: notes.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: notify.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: notify.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: partner/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: partner/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passwords.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passwords.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pkg/api/response/leaseauth.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pkg/api/response/leaseauth.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pkg/client/s3v2/trace.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pkg/client/s3v2/trace.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: providers/aws.service.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: providers/aws.service.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: readme.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: readme.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recipes/elb.rb. ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recipes/elb.rb. ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reset_lambda/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reset_lambda/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resource/app-config.dev.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resource/app-config.dev.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/config/run-production.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/config/run-production.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/settings_vault.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/settings_vault.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-client/main.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-client/main.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-storage.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-storage.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/key.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/key.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/main.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/main.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/main.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/main.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3v2/trace.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3v2/trace.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sample.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sample.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/env.json.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/env.json.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secretBackend.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secretBackend.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets-sample.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets-sample.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-side/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-side/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/AWS/AWSDetails.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/AWS/AWSDetails.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config/database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config/database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config/template.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config/template.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/configs/aws.config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/configs/aws.config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/controller.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/controller.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/helper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/helper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/helper/aws_s3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/helper/aws_s3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/mail.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/mail.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/mailer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/mailer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/mailserver.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/mailserver.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/main.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/main.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/src/util/s3_operation.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/src/util/s3_operation.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/utils.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/utils.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/environments.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/environments.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sg.config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sg.config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared/backend/aws/identity.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared/backend/aws/identity.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sniff/fixtures/credentials.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sniff/fixtures/credentials.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spec/helper.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spec/helper.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spec/s3-storage.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spec/s3-storage.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spec/spec_helper.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spec/spec_helper.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spec2.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spec2.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/FileUpload.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/FileUpload.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/Utils/FileUpload.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/Utils/FileUpload.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/access.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/access.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/api/model/config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/api/model/config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/app/services/aws.service.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/app/services/aws.service.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/aws.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/aws.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/backend/uploader.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/backend/uploader.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/components/CustomFileUpload.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/components/CustomFileUpload.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/aws.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/aws.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/envs/default.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/envs/default.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/template.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/template.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/constants.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/constants.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/controller.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/controller.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/entities/vault.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/entities/vault.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/go/main.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/go/main.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/helper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/helper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/helpers/s3fileUpload.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/helpers/s3fileUpload.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/lib/aws-s3.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/lib/aws-s3.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/lib/aws-wrapper.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/lib/aws-wrapper.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/libs/aws-notifications.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/libs/aws-notifications.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/mail.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/mail.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/mailer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/mailer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/mailserver.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/mailserver.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/AwsCredentials.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/AwsCredentials.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/config.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/config.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/dev.aws.s3.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/dev.aws.s3.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/global.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/global.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/webapp/Jsp/uploadManagement/postView.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/webapp/Jsp/uploadManagement/postView.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/webapp/aws.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/webapp/aws.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/webapp/download.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/webapp/download.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/webapp/kube-lets.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/webapp/kube-lets.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/middleWare/awsfileUpload.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/middleWare/awsfileUpload.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/models/aws.model.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/models/aws.model.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/providers/aws.service.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/providers/aws.service.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/rush/api/server.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/rush/api/server.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/s3.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/s3.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/src.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/src.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/utils.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/utils.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/utils/awsS3.util.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/utils/awsS3.util.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/utils/createAWS.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/utils/createAWS.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: t-rex-config.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: t-rex-config.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: toml/emailconfig.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: toml/emailconfig.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploader.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploader.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: urlwatch.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: urlwatch.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/controllers/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/controllers/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils/awsS3.util.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils/awsS3.util.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils/s3Client.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils/s3Client.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: values.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: values.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vault.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vault.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vault/vault.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vault/vault.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config/database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config/database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config/template.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config/template.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/controller.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/controller.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/helper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/helper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/mail.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/mail.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/mailer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/mailer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/mailserver.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/mailserver.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/utils.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/utils.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/web.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/web.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: workflow.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: workflow.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: workflows.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: workflows.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: workflows/ci.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: workflows/ci.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp_mail_smtp.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp_mail_smtp.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 22:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 22:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 22:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 22:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfoposmeta.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfoposmeta.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ppinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ppinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/web/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/web/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tool/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tool/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/server_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/server_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admincontrol/sys_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admincontrol/sys_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:02:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/sys_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 22:02:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/sys_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 22:26:33 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-05-06 22:26:33 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-05-06 22:36:45 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-05-06 22:36:45 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-05-06 22:41:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 22:41:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 22:54:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 22:54:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 23:01:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passengers/how_it_works.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 23:01:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passengers/how_it_works.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 23:13:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passengers/pricing.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 23:13:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passengers/pricing.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 23:19:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/how_it_works.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 23:19:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/how_it_works.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 23:33:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/pricing.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 23:33:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/pricing.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 23:34:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 23:34:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 23:34:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 23:34:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 23:34:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 23:34:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 23:34:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 23:34:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 23:34:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 23:34:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 23:34:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 23:34:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 23:34:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 23:34:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 23:34:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 23:34:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 23:34:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 23:34:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 23:34:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 23:34:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 23:34:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 23:34:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 23:34:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 23:34:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 23:34:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 23:34:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 23:34:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 23:34:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 23:34:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 23:34:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 23:34:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 23:34:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 23:34:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 23:34:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 23:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 23:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 23:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 23:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 23:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 23:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 23:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 23:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 23:34:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 23:34:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 23:34:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 23:34:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 23:34:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 23:34:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 23:34:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 23:34:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 23:34:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 23:34:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 23:37:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 23:37:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 23:37:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 23:37:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 23:37:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 23:37:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 23:37:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 23:37:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 23:38:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 23:38:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 23:38:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 23:38:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 23:38:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 23:38:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 23:38:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 23:38:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 23:38:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 23:38:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 23:38:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 23:38:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 23:38:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 23:38:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 23:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-06 23:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-06 23:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 23:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 23:41:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 23:41:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 23:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 23:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-06 23:58:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-06 23:58:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}