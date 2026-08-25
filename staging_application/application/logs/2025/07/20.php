<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2025-07-20 00:07:13 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-20 00:07:13 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-20 00:07:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 00:07:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 00:07:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL odinhttpcall1752959234 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 00:07:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL odinhttpcall1752959234 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 00:07:14 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-20 00:07:14 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-20 00:07:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL evox/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 00:07:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL evox/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 00:07:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 00:07:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 00:07:15 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-20 00:07:15 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-20 00:07:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/authLogin.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 00:07:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/authLogin.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 00:07:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 00:07:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 00:07:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin/info/system was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 00:07:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin/info/system was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 00:07:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 00:07:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 00:07:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin/cores was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 00:07:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin/cores was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 00:07:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 00:07:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 00:16:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 00:16:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 00:16:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 00:16:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 00:16:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 00:16:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 00:16:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 00:16:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 00:16:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 00:16:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 00:16:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 00:16:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 00:16:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 00:16:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 00:16:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 00:16:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 00:16:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 00:16:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 00:16:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 00:16:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 00:16:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 00:16:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 00:16:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 00:16:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 00:16:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 00:16:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 00:22:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 00:22:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 00:27:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 00:27:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 00:28:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webshell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 00:28:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webshell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 00:31:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webshell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 00:31:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webshell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 00:33:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _ignition/health-check was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 00:33:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _ignition/health-check was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 00:35:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webshell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 00:35:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webshell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 00:36:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webshell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 00:36:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webshell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 00:40:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 00:40:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 00:53:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 00:53:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 01:23:02 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-20 01:23:02 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-20 01:23:02 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-20 01:23:02 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-20 01:23:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 01:23:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 01:23:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL odinhttpcall1752963782 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 01:23:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL odinhttpcall1752963782 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 01:23:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL evox/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 01:23:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL evox/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 01:23:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 01:23:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 01:23:03 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-20 01:23:03 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-20 01:23:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 01:23:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 01:23:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 01:23:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 01:23:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin/info/system was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 01:23:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin/info/system was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 01:23:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/authLogin.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 01:23:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/authLogin.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 01:23:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin/cores was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 01:23:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin/cores was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 01:23:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 01:23:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 02:40:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL RDWeb was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 02:40:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL RDWeb was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 02:48:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 02:48:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 02:48:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 02:48:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 02:48:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 02:48:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 02:48:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 02:48:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 02:48:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 02:48:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 02:48:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 02:48:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 02:48:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 02:48:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 02:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 02:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 02:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 02:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 02:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 02:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 02:48:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 02:48:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 02:48:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 02:48:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 02:48:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 02:48:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 03:40:33 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-20 03:40:33 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-20 03:47:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 03:47:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 03:55:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 03:55:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 03:55:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 03:55:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 03:55:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 03:55:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 03:55:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 03:55:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 03:55:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 03:55:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 03:55:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: handlers.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 03:55:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: handlers.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 03:55:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fastapi.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 03:55:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fastapi.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 03:55:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 03:55:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 03:55:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 03:55:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 03:55:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 03:55:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 03:55:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 03:55:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 03:55:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nest.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 03:55:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nest.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 03:55:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: venv.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 03:55:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: venv.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 03:55:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 03:55:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 03:55:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 03:55:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 04:39:06 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-20 04:39:06 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-20 04:39:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 04:39:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 04:39:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 04:39:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 04:44:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sra_{BA195980-CD49-458b-9E23-C84EE0ADCD75} was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 04:44:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sra_{BA195980-CD49-458b-9E23-C84EE0ADCD75} was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 04:51:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 04:51:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 04:51:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 04:51:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 04:51:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-cloudformation.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 04:51:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-cloudformation.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 04:51:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 04:51:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 04:55:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 04:55:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 04:55:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 04:55:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 05:00:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hudson was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 05:00:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hudson was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 05:15:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:15:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:15:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:15:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:21:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: httpd.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:21:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: httpd.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:21:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:21:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:21:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:21:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:21:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:21:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:21:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: protected/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:21:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: protected/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:21:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:21:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:21:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:21:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:21:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:21:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:21:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:21:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:21:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:21:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:21:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:21:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:21:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:21:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:21:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application-dev.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:21:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application-dev.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:21:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: karma.conf.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:21:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: karma.conf.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:21:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:21:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:21:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:21:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:21:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:21:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:21:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:21:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:21:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:21:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:21:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:21:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:21:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:21:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:21:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:21:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:21:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:21:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:22:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:22:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:22:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:22:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:22:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 05:22:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 05:22:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:22:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:22:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:22:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:22:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-07-20 05:22:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 05:22:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:22:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:22:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:22:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:22:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:22:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:22:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:22:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:22:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:22:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:22:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/app_dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:22:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/app_dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:22:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: library/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:22:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: library/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:22:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:22:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:22:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:22:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:22:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:22:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:22:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:22:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:22:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:22:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:22:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:22:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:22:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 05:22:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 05:22:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:22:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:22:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-07-20 05:22:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 05:22:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:22:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:22:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:22:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:22:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 05:22:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 05:22:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:22:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:22:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:22:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:22:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:22:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:22:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:22:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:22:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_errors.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:22:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_errors.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:22:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:22:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:22:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:22:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:22:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:22:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:22:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:22:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:22:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:22:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:22:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ds.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 05:22:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ds.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 05:48:51 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-20 05:48:51 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-20 05:55:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 05:55:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 06:06:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 06:06:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 06:07:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 06:07:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 06:08:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webshell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 06:08:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webshell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 06:08:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 06:08:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 06:09:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webshell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 06:09:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webshell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:48:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: httpd.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:48:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: httpd.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:48:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:48:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:48:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:48:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:48:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:48:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:48:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: protected/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:48:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: protected/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:48:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:48:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:48:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:48:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:48:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:48:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:48:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:48:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:48:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:48:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:48:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:48:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:48:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:48:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:48:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application-dev.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:48:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application-dev.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: karma.conf.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: karma.conf.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:48:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:48:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:48:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:48:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:48:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:48:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:48:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:48:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:48:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:48:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:48:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:48:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:48:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:48:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:48:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:48:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:48:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 07:48:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 07:48:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:48:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:48:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:48:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:48:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-07-20 07:48:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 07:48:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:48:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:48:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:48:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:48:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:48:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:48:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:48:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:49:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:49:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:49:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/app_dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:49:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/app_dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:49:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: library/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:49:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: library/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:49:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:49:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:49:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:49:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:49:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:49:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:49:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:49:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:49:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:49:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:49:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:49:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:49:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 07:49:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 07:49:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:49:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:49:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-07-20 07:49:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 07:49:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:49:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:49:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:49:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:49:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 07:49:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 07:49:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:49:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:49:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:49:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:49:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:49:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:49:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:49:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:49:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_errors.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:49:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_errors.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:49:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:49:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:49:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:49:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:49:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:49:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:49:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:49:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:49:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:49:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 07:49:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ds.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 07:49:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ds.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 08:08:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 08:08:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 08:21:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ab2g was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 08:21:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ab2g was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 08:21:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ab2h was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 08:21:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ab2h was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 08:21:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alive.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 08:21:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alive.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 08:21:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 08:21:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 08:21:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 08:21:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 08:21:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL teorema505 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 08:21:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL teorema505 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 08:28:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 08:28:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 09:06:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:06:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:06:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 09:06:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 09:08:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webshell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 09:08:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webshell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 09:12:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webshell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:12:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webshell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: handlers.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: handlers.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: access_keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: access_keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nest.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nest.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fastapi.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fastapi.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecs_config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecs_config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: venv.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: venv.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:42:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:42:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:42:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:42:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: handlers.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:42:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:42:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: handlers.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:42:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: venv.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:42:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: venv.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:42:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:42:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:42:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nest.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:42:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nest.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:42:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:42:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:42:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:42:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:42:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:42:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:42:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fastapi.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:42:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fastapi.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:42:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:42:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:42:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:42:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:42:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:42:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:42:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:42:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:42:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:42:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:42:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:42:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:42:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:42:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:42:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:42:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:42:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:42:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:42:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:42:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:42:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:42:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:42:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:42:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:42:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:42:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:42:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:42:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:42:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:42:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:42:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:42:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:42:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:42:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:42:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:42:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:42:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: access_keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:42:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: access_keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:42:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:42:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 09:42:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecs_config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 09:42:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecs_config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 10:01:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 10:01:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 10:04:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/x.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 10:04:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/x.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 10:04:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 10:04:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 10:07:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/wlwmanifest.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 10:07:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/wlwmanifest.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 10:07:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 10:07:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 10:15:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/build/js/intlTelInput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 10:15:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/build/js/intlTelInput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 10:15:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/datepicker/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 10:15:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/datepicker/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 10:15:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/bootstrap-timepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 10:15:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/bootstrap-timepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 10:15:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/bootstrap3.7.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 10:15:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/bootstrap3.7.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 10:15:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/jquery.fadethis.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 10:15:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/jquery.fadethis.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 10:15:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 10:15:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 10:15:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/jquery.lightbox_me.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 10:15:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/jquery.lightbox_me.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 10:15:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/jquery.selectbox-0.2.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 10:15:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/jquery.selectbox-0.2.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 10:15:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/jquery3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 10:15:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/jquery3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 10:15:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/owl.carousel.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 10:15:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/owl.carousel.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 10:15:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 10:15:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 10:15:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/simpledatetimepicker/jquery.simple-dtpicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 10:15:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/simpledatetimepicker/jquery.simple-dtpicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 10:15:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/smoothscroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 10:15:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/smoothscroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 10:15:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/swiper.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 10:15:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/swiper.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 10:15:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/validation/jquery.validate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 10:15:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/validation/jquery.validate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 10:15:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/viewportchecker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 10:15:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/viewportchecker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 10:15:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/timepicker/jquery.timepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 10:15:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/timepicker/jquery.timepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 10:15:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 10:15:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 10:15:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.google.com/recaptcha/api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 10:15:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.google.com/recaptcha/api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 10:15:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.gstatic.com/firebasejs/3.9.0/firebase.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 10:15:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.gstatic.com/firebasejs/3.9.0/firebase.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 10:19:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 10:19:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 10:19:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 10:19:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 10:19:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 10:19:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 10:19:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 10:19:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 10:56:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 10:56:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 11:28:48 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-20 11:28:48 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-20 11:59:12 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-20 11:59:12 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-20 12:52:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 12:52:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 13:04:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 13:04:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 13:19:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 13:19:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 13:33:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 13:33:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 13:40:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 13:40:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 13:52:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 13:52:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 13:52:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 13:52:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 13:52:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 13:52:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 13:52:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 13:52:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 13:52:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 13:52:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 13:52:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 13:52:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 13:52:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 13:52:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 13:52:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 13:52:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 13:52:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 13:52:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 13:52:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 13:52:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 13:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 13:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 13:52:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 13:52:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 13:52:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 13:52:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 14:06:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 14:06:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 14:06:17 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-20 14:06:17 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-20 14:58:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contact-us was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 14:58:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contact-us was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 14:58:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 14:58:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 14:58:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contactus was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 14:58:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contactus was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 14:58:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contactus.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 14:58:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contactus.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 14:58:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contactus.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 14:58:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contactus.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 14:58:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contact_us was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 14:58:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contact_us was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 14:58:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 14:58:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 14:58:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 14:58:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 14:58:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 14:58:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 14:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/acf/v3/options/a was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 14:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/acf/v3/options/a was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 14:58:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 14:58:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 14:58:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: message.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 14:58:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: message.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 15:11:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 15:11:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 15:16:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 15:16:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 15:16:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 15:16:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 15:16:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 15:16:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 15:16:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 15:16:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 15:16:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 15:16:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 15:16:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 15:16:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 15:16:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 15:16:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 15:16:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 15:16:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 15:16:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 15:16:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 15:16:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 15:16:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 15:16:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 15:16:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 15:16:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 15:16:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 15:16:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 15:16:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 15:16:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 15:16:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 15:16:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 15:16:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 15:16:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 15:16:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 15:16:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 15:16:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 15:16:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 15:16:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 15:16:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 15:16:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 15:16:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 15:16:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 15:16:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 15:16:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 15:16:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 15:16:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 15:16:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 15:16:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 15:16:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 15:16:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 15:16:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 15:16:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 15:16:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 15:16:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 15:16:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 15:16:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 15:16:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 15:16:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 15:16:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 15:16:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 15:16:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 15:16:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 15:16:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 15:16:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 15:16:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 15:16:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 15:48:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 15:48:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 16:10:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 16:10:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 16:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 16:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 17:01:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 17:01:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 18:06:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webshell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 18:06:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webshell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 18:06:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webshell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 18:06:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webshell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 18:06:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 18:06:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 18:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 18:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 18:25:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 18:25:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 19:28:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 19:28:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 19:33:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 19:33:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 20:14:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/um_open_telnet.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 20:14:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/um_open_telnet.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 20:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 20:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 20:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2025.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 20:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2025.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 20:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 20:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 20:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup_2025.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 20:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup_2025.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 20:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 20:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 20:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 20:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 20:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 20:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 20:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 20:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 20:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 20:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 20:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 20:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 20:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 20:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 20:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 20:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 20:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 20:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 20:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: creds_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 20:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: creds_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 20:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 20:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 20:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 20:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 20:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 20:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 20:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 20:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 20:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 20:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 20:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 20:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 20:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 20:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 20:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 20:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 20:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: latest_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 20:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: latest_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 20:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: full_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 20:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: full_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 20:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 20:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 20:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2025_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 20:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2025_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 20:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 20:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 20:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 20:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 20:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 20:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 20:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 20:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 20:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archive_2025.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 20:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archive_2025.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 20:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 20:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 20:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 20:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 20:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql_2025.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 20:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 20:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql_2025.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 20:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 20:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: source_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 20:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: source_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 20:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 20:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 20:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 20:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 20:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 20:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 20:45:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 20:45:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 21:32:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: form.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 21:32:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: form.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 21:32:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 21:32:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 21:32:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 21:32:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 21:32:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 21:32:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-20 21:32:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 21:32:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 21:32:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 21:32:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 21:32:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: systembc/password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 21:32:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: systembc/password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 21:32:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 21:32:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 22:47:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-20 22:47:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-20 23:44:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-20 23:44:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}